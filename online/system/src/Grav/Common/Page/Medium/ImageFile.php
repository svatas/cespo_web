<?php

/**
 * @package    Grav\Common\Page
 *
 * @copyright  Copyright (C) 2015 - 2020 Trilby Media, LLC. All rights reserved.
 * @license    MIT License; see LICENSE file for details.
 */

namespace Grav\Common\Page\Medium;

use Grav\Common\Grav;
use Gregwar\Image\Exceptions\GenerationError;
use Gregwar\Image\Image;
use Gregwar\Image\Source;
use RocketTheme\Toolbox\Event\Event;
use RocketTheme\Toolbox\ResourceLocator\UniformResourceLocator;

class ImageFile extends Image
{
    public function __destruct()
    {
        $this->getAdapter()->deinit();
    }

    /**
     * Clear previously applied operations
     */
    public function clearOperations()
    {
        $this->operations = [];
    }

    /**
     * This is the same as the Gregwar Image class except this one fires a Grav Event on creation of new cached file
     *
     * @param string $type the image type
     * @param int $quality the quality (for JPEG)
     * @param bool $actual
     * @param array $extras
     *
     * @return string
     */
    public function cacheFile($type = 'jpg', $quality = 80, $actual = false, $extras = [])
    {
        if ($type === 'guess') {
            $type = $this->guessType();
        }

        if (!$this->forceCache && !count($this->operations) && $type === $this->guessType()) {
            return $this->getFilename($this->getFilePath());
        }

        // Computes the hash
        $this->hash = $this->getHash($type, $quality, $extras);

        // Seo friendly image names
        $seofriendly = Grav::instance()['config']->get('system.images.seofriendly', false);

        if ($seofriendly) {
            $mini_hash = substr($this->hash, 0, 4) . substr($this->hash, -4);
            $cacheFile = "{$this->prettyName}-{$mini_hash}";
        } else {
            $cacheFile = "{$this->hash}-{$this->prettyName}";
        }

        $cacheFile .= '.' . $type;

        // If the files does not exists, save it
        $image = $this;

        // Target file should be younger than all the current image
        // dependencies
        $conditions = array(
            'younger-than' => $this->getDependencies()
        );

        // The generating function
        $generate = function ($target) use ($image, $type, $quality) {
            $result = $image->save($target, $type, $quality);

            if ($result !== $target) {
                throw new GenerationError($result);
            }

            Grav::instance()->fireEvent('onImageMediumSaved', new Event(['image' => $target]));
        };

        // Asking the cache for the cacheFile
        try {
            $perms = Grav::instance()['config']->get('system.images.cache_perms', '0755');
            $perms = octdec($perms);
            $file = $this->getCacheSystem()->setDirectoryMode($perms)->getOrCreateFile($cacheFile, $conditions, $generate, $actual);
        } catch (GenerationError $e) {
            $file = $e->getNewFile();
        }

        // Nulling the resource
        $this->getAdapter()->setSource(new Source\File($file));
        $this->getAdapter()->deinit();

        if ($actual) {
            return $file;
        }

        return $this->getFilename($file);
    }

    /**
     * Gets the hash.
     * @param string $type
     * @param int $quality
     * @param array $extras
     * @return string
     */
    public function getHash($type = 'guess', $quality = 80, $extras = [])
    {
        if (null === $this->hash) {
            $this->generateHash($type, $quality, $extras);
        }

        return $this->hash;
    }

    /**
     * Generates the hash.
     * @param string $type
     * @param int $quality
     * @param array $extras
     */
    public function generateHash($type = 'guess', $quality = 80, $extras = [])
    {
        $inputInfos = $this->source->getInfos();

        $datas = array(
            $inputInfos,
            $this->serializeOperations(),
            $type,
            $quality,
            $extras
        );

        $this->hash = sha1(serialize($datas));
    }

    /**
     * Read exif rotation from file and apply it.
     */
    public function fixOrientation()
    {
        if (!in_array(exif_imagetype($this->source->getInfos()), array(
            IMAGETYPE_JPEG,
            IMAGETYPE_TIFF_II,
            IMAGETYPE_TIFF_MM,
        ))) {
            return $this;
        }

        if (!extension_loaded('exif')) {
            throw new \RuntimeException('You need to EXIF PHP Extension to use this function');
        }

        // resolve any streams
        /** @var UniformResourceLocator $locator */
        $locator = Grav::instance()['locator'];
        $filepath = $this->source->getInfos();
        if ($locator->isStream($filepath)) {
            $filepath = $locator->findResource($this->source->getInfos(), true, true);
        }

        // Make sure file exists
        if (!file_exists($filepath)) {
            return $this;
        }

        try {
            $exif = exif_read_data($filepath);
        } catch (\Exception $e) {
            Grav::instance()['log']->error($filepath . " - " . $e->getMessage());
            return $this;
        }

        if ($exif === false || !array_key_exists('Orientation', $exif)) {
            return $this;
        }

        return $this->applyExifOrientation($exif['Orientation']);
    }
}

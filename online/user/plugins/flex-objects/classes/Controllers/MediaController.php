<?php

declare(strict_types=1);

namespace Grav\Plugin\FlexObjects\Controllers;

use Grav\Common\Form\FormFlash;
use Grav\Common\Grav;
use Grav\Common\Media\Interfaces\MediaUploadInterface;
use Grav\Common\Page\Interfaces\PageInterface;
use Grav\Common\Page\Media;
use Grav\Common\Page\Medium\Medium;
use Grav\Common\Page\Medium\MediumFactory;
use Grav\Common\Session;
use Grav\Common\Uri;
use Grav\Common\Utils;
use Grav\Framework\Flex\FlexObject;
use Grav\Framework\Flex\Interfaces\FlexAuthorizeInterface;
use Grav\Framework\Flex\Interfaces\FlexObjectInterface;
use Grav\Framework\Media\Interfaces\MediaInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\UploadedFileInterface;
use RocketTheme\Toolbox\Event\Event;

class MediaController extends AbstractController
{
    /**
     * @return ResponseInterface
     */
    public function taskMediaUpload(): ResponseInterface
    {
        $this->checkAuthorization('media.create');

        /** @var FlexObjectInterface|null $object */
        $object = $this->getObject();
        if (!$object) {
            throw new \RuntimeException('Not Found', 404);
        }

        if (!method_exists($object, 'checkUploadedMediaFile')) {
            throw new \RuntimeException('Not Found', 404);
        }

        // Get field for the uploaded media.
        $field = $this->getPost('name', 'undefined');
        if ($field === 'undefined') {
            $field = null;
        }

        $files = $this->getRequest()->getUploadedFiles();
        if ($field && isset($files['data'])) {
            $files = $files['data'];
            $parts = explode('.', $field);
            $last = array_pop($parts);
            foreach ($parts as $name) {
                if (!is_array($files[$name])) {
                    throw new \RuntimeException($this->translate('PLUGIN_ADMIN.INVALID_PARAMETERS'), 400);
                }
                $files = $files[$name];
            }
            $file = $files[$last] ?? null;

        } else {
            // Legacy call with name being the filename instead of field name.
            $file = $files['file'] ?? null;
            $field = null;
        }

        /** @var UploadedFileInterface $file */
        if (is_array($file)) {
            $file = reset($file);
        }

        if (!$file instanceof UploadedFileInterface) {
            throw new \RuntimeException($this->translate('PLUGIN_ADMIN.INVALID_PARAMETERS'), 400);
        }

        $filename = $file->getClientFilename();

        $object->checkUploadedMediaFile($file, $filename, $field);

        try {
            $flash = $this->getFormFlash($object);
            $crop = $this->getPost('crop');
            if (\is_string($crop)) {
                $crop = json_decode($crop, true);
            }

            $flash->addUploadedFile($file, $field, $crop);
            $flash->save();
        } catch (\Exception $e) {
            throw new \RuntimeException($e->getMessage(), $e->getCode(), $e);
        }

        // Include exif metadata into the response if configured to do so
        $metadata = [];
        $include_metadata = $this->getGrav()['config']->get('system.media.auto_metadata_exif', false);
        if ($include_metadata) {
            $medium = MediumFactory::fromUploadedFile($file);

            $media = $object->getMedia();
            $media->add($filename, $medium);

            $basename = str_replace(['@3x', '@2x'], '', pathinfo($filename, PATHINFO_BASENAME));
            if (isset($media[$basename])) {
                $metadata = $media[$basename]->metadata() ?: [];
            }
        }

        $response = [
            'code'    => 200,
            'status'  => 'success',
            'message' => $this->translate('PLUGIN_ADMIN.FILE_UPLOADED_SUCCESSFULLY'),
            'filename' => $filename,
            'metadata' => $metadata
        ];

        return $this->createJsonResponse($response);
    }

    /**
     * @return ResponseInterface
     */
    public function taskMediaDelete(): ResponseInterface
    {
        $this->checkAuthorization('media.delete');

        /** @var FlexObjectInterface|null $object */
        $object = $this->getObject();
        if (!$object) {
            throw new \RuntimeException('Not Found', 404);
        }

        $filename = $this->getPost('filename');

        // Handle bad filenames.
        if (!Utils::checkFilename($filename)) {
            throw new \RuntimeException($this->translate('PLUGIN_ADMIN.NO_FILE_FOUND'), 400);
        }

        try {
            $field = $this->getPost('name');
            $flash = $this->getFormFlash($object);
            $flash->removeFile($filename, $field);
            $flash->save();
        } catch (\Exception $e) {
            throw new \RuntimeException($e->getMessage(), $e->getCode(), $e);
        }

        $response = [
            'code'    => 200,
            'status'  => 'success',
            'message' => $this->translate('PLUGIN_ADMIN.FILE_DELETED') . ': ' . $filename
        ];

        return $this->createJsonResponse($response);
    }

    /**
     * Used in pagemedia field.
     *
     * @return ResponseInterface
     */
    public function taskMediaCopy(): ResponseInterface
    {
        $this->checkAuthorization('media.create');

        /** @var FlexObjectInterface|null $object */
        $object = $this->getObject();
        if (!$object) {
            throw new \RuntimeException('Not Found', 404);
        }

        if (!method_exists($object, 'uploadMediaFile')) {
            throw new \RuntimeException('Not Found', 404);
        }

        $request = $this->getRequest();
        $files = $request->getUploadedFiles();

        $file = $files['file'] ?? null;
        if (!$file instanceof UploadedFileInterface) {
            throw new \RuntimeException($this->translate('PLUGIN_ADMIN.INVALID_PARAMETERS'), 400);
        }

        $post = $request->getParsedBody();
        $filename = $post['name'] ?? $file->getClientFilename();

        // Upload media right away.
        $object->uploadMediaFile($file, $filename);

        // Include exif metadata into the response if configured to do so
        $metadata = [];
        $include_metadata = $this->getGrav()['config']->get('system.media.auto_metadata_exif', false);
        if ($include_metadata) {
            $basename = str_replace(['@3x', '@2x'], '', pathinfo($filename, PATHINFO_BASENAME));
            $media = $object->getMedia();
            if (isset($media[$basename])) {
                $metadata = $media[$basename]->metadata() ?: [];
            }
        }

        if ($object instanceof PageInterface) {
            // Backwards compatibility to existing plugins.
            $this->grav->fireEvent('onAdminAfterAddMedia', new Event(['page' => $object]));
        }

        $response = [
            'code'    => 200,
            'status'  => 'success',
            'message' => $this->translate('PLUGIN_ADMIN.FILE_UPLOADED_SUCCESSFULLY'),
            'filename' => $filename,
            'metadata' => $metadata
        ];

        return $this->createJsonResponse($response);
    }


    /**
     * Used in pagemedia field.
     *
     * @return ResponseInterface
     */
    public function taskMediaRemove(): ResponseInterface
    {
        $this->checkAuthorization('media.delete');

        /** @var FlexObjectInterface|null $object */
        $object = $this->getObject();
        if (!$object) {
            throw new \RuntimeException('Not Found', 404);
        }

        if (!method_exists($object, 'deleteMediaFile')) {
            throw new \RuntimeException('Not Found', 404);
        }

        $filename = $this->getPost('filename');

        // Handle bad filenames.
        if (!Utils::checkFilename($filename)) {
            throw new \RuntimeException($this->translate('PLUGIN_ADMIN.NO_FILE_FOUND'), 400);
        }

        $object->deleteMediaFile($filename);

        $response = [
            'code'    => 200,
            'status'  => 'success',
            'message' => $this->translate('PLUGIN_ADMIN.FILE_DELETED') . ': ' . $filename
        ];

        return $this->createJsonResponse($response);
    }

    /**
     * @return ResponseInterface
     */
    public function actionMediaList(): ResponseInterface
    {
        $this->checkAuthorization('media.list');

        /** @var MediaInterface $object */
        $object = $this->getObject();
        if (!$object) {
            throw new \RuntimeException('Not Found', 404);
        }

        $media = $object->getMedia();
        $media_list = [];

        /**
         * @var string $name
         * @var Medium $medium
         */
        foreach ($media->all() as $name => $medium) {
            $media_list[$name] = [
                'url' => $medium->display($medium->get('extension') === 'svg' ? 'source' : 'thumbnail')->cropZoom(400, 300)->url(),
                'size' => $medium->get('size'),
                'metadata' => $medium->metadata() ?: [],
                'original' => $medium->higherQualityAlternative()->get('filename')
            ];
        }

        $response = [
            'code' => 200,
            'status' => 'success',
            'results' => $media_list
        ];

        return $this->createJsonResponse($response);
    }

    /**
     * Used by the filepicker field to get a list of files in a folder.
     *
     * @return ResponseInterface
     */
    protected function actionMediaPicker(): ResponseInterface
    {
        $this->checkAuthorization('media.list');

        /** @var FlexObject $object */
        $object = $this->getObject();
        if (!$object) {
            throw new \RuntimeException('Not Found', 404);
        }

        $name = $this->getPost('name');
        $settings = $object->getBlueprint()->schema()->getProperty($name);
        $fieldFolder = $settings['folder'] ?? null;
        if ($fieldFolder) {
            // Custom media.
            $media = new Media($fieldFolder, []);
        } else {
            // Object media.
            $media = $object->getMedia();
        }

        $available_files = [];
        $metadata = [];
        $thumbs = [];

        /**
         * @var string $name
         * @var Medium $medium
         */
        foreach ($media->all() as $name => $medium) {
            $available_files[] = $name;

            if (isset($settings['include_metadata'])) {
                $img_metadata = $medium->metadata();
                if ($img_metadata) {
                    $metadata[$name] = $img_metadata;
                }
            }

        }

        // Peak in the flashObject for optimistic filepicker updates
        $pending_files = [];
        $sessionField = base64_encode($this->getGrav()['uri']->url());
        $flash = $this->getSession()->getFlashObject('files-upload');
        $folder = $media->getPath() ?: null;

        if ($flash && isset($flash[$sessionField])) {
            foreach ($flash[$sessionField] as $field => $data) {
                foreach ($data as $file) {
                    $test = \dirname($file['path']);
                    if ($test === $folder) {
                        $pending_files[] = $file['name'];
                    }
                }
            }
        }

        $this->getSession()->setFlashObject('files-upload', $flash);

        // Handle Accepted file types
        // Accept can only be file extensions (.pdf|.jpg)
        if (isset($settings['accept'])) {
            $available_files = array_filter($available_files, function ($file) use ($settings) {
                return $this->filterAcceptedFiles($file, $settings);
            });

            $pending_files = array_filter($pending_files, function ($file) use ($settings) {
                return $this->filterAcceptedFiles($file, $settings);
            });
        }

        // Generate thumbs if needed
        if (isset($settings['preview_images']) && $settings['preview_images'] === true) {
            foreach ($available_files as $filename) {
                $thumbs[$filename] = $media[$filename]->zoomCrop(100,100)->url();
            }
        }

        $response = [
            'code' => 200,
            'status' => 'success',
            'files' => array_values($available_files),
            'pending' => array_values($pending_files),
            'folder' => $folder,
            'metadata' => $metadata,
            'thumbs' => $thumbs
        ];

        return $this->createJsonResponse($response);
    }

    /**
     * @param FlexObjectInterface $object
     * @return FormFlash
     */
    protected function getFormFlash(FlexObjectInterface $object)
    {
        $grav = Grav::instance();

        /** @var Session $session */
        $session = $grav['session'];

        /** @var Uri $uri */
        $uri = $grav['uri'];
        $url = $uri->url;

        $formName = $this->getPost('__form-name__');
        if (!$formName) {
            // Legacy call without form name.
            $form = $object->getForm();
            $formName = $form->getName();
            $uniqueId = $form->getUniqueId();
        } else {
            $uniqueId = $this->getPost('__unique_form_id__') ?: $formName ?: sha1($url);
        }

        $config = [
            'session_id' => $session->getId(),
            'unique_id' => $uniqueId,
            'form_name' => $formName,
        ];
        $flash = new FormFlash($config);
        $flash->setUrl($url)->setUser($grav['user']);

        return $flash;
    }

    protected function filterAcceptedFiles(string $file, array $settings)
    {
        $valid = false;

        foreach ((array)$settings['accept'] as $type) {
            $find = str_replace('*', '.*', $type);
            $valid |= preg_match('#' . $find . '$#', $file);
        }

        return $valid;
    }

    /**
     * @param string $action
     * @throws \LogicException
     * @throws \RuntimeException
     */
    protected function checkAuthorization(string $action): void
    {
        /** @var FlexAuthorizeInterface $object */
        $object = $this->getObject();

        if (!$object) {
            throw new \RuntimeException('Not Found', 404);
        }

        switch ($action) {
            case 'media.list':
                $action = 'read';
                break;

            case 'media.create':
            case 'media.delete':
                $action = $object->exists() ? 'update' : 'create';
                break;

            default:
                throw new \LogicException(sprintf('Unsupported authorize action %s', $action), 500);
        }

        if (!$object->isAuthorized($action, null, $this->user)) {
            throw new \RuntimeException('Forbidden', 403);
        }
    }
}

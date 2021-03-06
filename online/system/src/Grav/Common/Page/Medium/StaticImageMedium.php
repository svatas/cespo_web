<?php

/**
 * @package    Grav\Common\Page
 *
 * @copyright  Copyright (C) 2015 - 2020 Trilby Media, LLC. All rights reserved.
 * @license    MIT License; see LICENSE file for details.
 */

namespace Grav\Common\Page\Medium;

use Grav\Common\Media\Interfaces\ImageMediaInterface;
use Grav\Common\Media\Traits\ImageLoadingTrait;
use Grav\Common\Media\Traits\StaticResizeTrait;

class StaticImageMedium extends Medium implements ImageMediaInterface
{
    use StaticResizeTrait;
    use ImageLoadingTrait;

    /**
     * Parsedown element for source display mode
     *
     * @param  array $attributes
     * @param  bool $reset
     * @return array
     */
    protected function sourceParsedownElement(array $attributes, $reset = true)
    {
        if (empty($attributes['src'])) {
            $attributes['src'] = $this->url($reset);
        }

        return ['name' => 'img', 'attributes' => $attributes];
    }
}

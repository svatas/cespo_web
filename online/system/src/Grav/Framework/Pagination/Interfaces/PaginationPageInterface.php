<?php

/**
 * @package    Grav\Framework\Pagination
 *
 * @copyright  Copyright (C) 2015 - 2020 Trilby Media, LLC. All rights reserved.
 * @license    MIT License; see LICENSE file for details.
 */

namespace Grav\Framework\Pagination\Interfaces;

interface PaginationPageInterface
{
    /**
     * @return bool
     */
    public function isActive(): bool;

    /**
     * @return bool
     */
    public function isEnabled(): bool;

    /**
     * @return array
     */
    public function getOptions(): array;

    /**
     * @return int|null
     */
    public function getNumber(): ?int;

    /**
     * @return string
     */
    public function getLabel(): string;

    /**
     * @return string|null
     */
    public function getUrl(): ?string;
}

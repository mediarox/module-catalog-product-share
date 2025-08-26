<?php
/**
 * Copyright 2025 (c) mediarox UG (haftungsbeschraenkt) (http://www.mediarox.de)
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Catalog\ProductShare\Model;

interface ConfigInterface
{
    public const DS = DIRECTORY_SEPARATOR;
    public const SECTION_NAME = 'products';
    public const GROUP_NAME = 'share';
    public const GROUP_PATH = self::SECTION_NAME . self::DS . self::GROUP_NAME . self::DS;
    public const CONFIG_ENABLED = self::GROUP_PATH . 'enabled';
}

<?php
/**
 * Copyright 2025 (c) mediarox UG (haftungsbeschraenkt) (http://www.mediarox.de)
 * See LICENSE for license details.
 */
declare(strict_types=1);

namespace Catalog\ProductShare\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Store\Model\ScopeInterface;

class Share extends AbstractHelper
{
    protected string $enabled;
    public function __construct(
        Context $context,
        $enabled,
        $urlPath,
        $groupName,
        $defaultShelfBays
    ) {
        parent::__construct($context);
        $this->enabled = $enabled;
    }

    public function isEnabled(): bool
    {
        return (bool) $this->scopeConfig->getValue($this->enabled, ScopeInterface::SCOPE_STORE);
    }
}

<?php
/**
 * Copyright 2025 (c) mediarox UG (haftungsbeschraenkt) (http://www.mediarox.de)
 * See LICENSE for license details.
 */

namespace Catalog\ProductShare\Block\Catalog\Product\View;

class Share extends \Magento\Catalog\Block\Product\View
{
    public function getProductNameForWhatsApp() 
    {
        $name = $this->getProduct()->getName();
        return preg_replace('/\s+/', '+', $name);
    }

    public function getProductNameForEmail()
    {
        $name = $this->getProduct()->getName();
        return preg_replace('/\s+/', '%20', $name);
    }

    public function getProductUrlEncoded()
    {
        $url = $this->getProduct()->getProductUrl();
        return urlencode($url);
    }

    public function getEmailSubject()
    {
        $subject = __('Product recommendation');
        return preg_replace('/\s+/', '%20', $subject);
    }
}

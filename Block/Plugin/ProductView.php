<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Yogendra\AllowedMinMaxQty\Block\Plugin;

use Magento\Framework\App\Config\ScopeConfigInterface;

class ProductView
{
    /**
     * @var ScopeConfigInterface
     */
    private $_scopeConfig;

    /**
     * @param StockRegistryInterface $stockRegistry
     */
    public function __construct(
        ScopeConfigInterface $scopeConfig
    ) {
        $this->_scopeConfig = $scopeConfig;
    }

    /**
     * @param \Magento\Catalog\Block\Product\View $block
     * @param array $validators
     * @return array
     */
    public function afterGetQuantityValidators(
        \Magento\Catalog\Block\Product\View $block,
        array $validators
    ) {
        if ($this->getConfigValue('enabled')) {
            if ($this->getConfigValue('type') == 1) {
                $validators['validate-item-quantity']['minAllowed'] = $this->getConfigValue('min_allowed_qty') ? $this->getConfigValue('min_allowed_qty') : 1;
                $validators['validate-item-quantity']['maxAllowed'] = $this->getConfigValue('max_allowed_qty') ? $this->getConfigValue('max_allowed_qty') : 10000;
            } else {
                $validators['validate-item-quantity']['minAllowed'] = $block->getProduct()->getMinAllowedQty() ? $block->getProduct()->getMinAllowedQty() : 1;
                $validators['validate-item-quantity']['maxAllowed'] = $block->getProduct()->getMaxAllowedQty() ? $block->getProduct()->getMaxAllowedQty() : 10000;
            }
        }
        return $validators;
    }

    private function getConfigValue($field)
    {
        return $this->_scopeConfig->getValue(
            'allowedminmaxqty/general_settings/' . $field, 
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }
}

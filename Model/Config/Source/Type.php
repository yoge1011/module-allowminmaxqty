<?php

namespace Yogendra\AllowedMinMaxQty\Model\Config\Source;

use Yogendra\AllowedMinMaxQty\Model\Type as ImplementationType;

class Type implements \Magento\Framework\Option\ArrayInterface
{

    public function toOptionArray()
    {
        return [
            ['value' => ImplementationType::STORE_WISE, 'label' => __('Store Wise')],
            ['value' => ImplementationType::PRODUCT_WISE, 'label' => __('Product Wise')]
        ];
    }

    public function toArray()
    {
        return [ImplementationType::STORE_WISE => __('Store Wise'), ImplementationType::PRODUCT_WISE => __('Product Wise')];
    }
}

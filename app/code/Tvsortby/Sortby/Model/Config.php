<?php

/*
 * Created on : Dec 2, 2017, 10:23:53 AM
 * Author: Tran Trong Thang
 * Email: trantrongthang1207@gmail.com
 * Skype: trantrongthang1207
 */

namespace Tvsortby\Sortby\Model;

class Config extends \Magento\Catalog\Model\Config {

    /**
     * Retrieve Attributes Used for Sort by as array
     * key = code, value = name
     *
     * @return array
     */
    public function getAttributeUsedForSortByArray() {
        $options = ['position' => __('Most Popular')];
        foreach ($this->getAttributesUsedForSortBy() as $attribute) {
            /* @var $attribute \Magento\Eav\Model\Entity\Attribute\AbstractAttribute */
            $options[$attribute->getAttributeCode()] = $attribute->getStoreLabel();
        }
        unset($options['name']);
        $options['position'] = __('Most Popular');
        $options['price'] = __('Low to High');
        $options['price_desc'] = __('High to Low');
        $options['instore'] = __('In store');
        return $options;
    }

}

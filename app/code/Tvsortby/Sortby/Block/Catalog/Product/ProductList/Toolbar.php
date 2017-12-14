<?php

/*
 * Created on : Dec 2, 2017, 10:24:30 AM
 * Author: Tran Trong Thang
 * Email: trantrongthang1207@gmail.com
 * Skype: trantrongthang1207
 */

namespace Tvsortby\Sortby\Block\Catalog\Product\ProductList;

use Magento\Catalog\Helper\Product\ProductList;
use Magento\Catalog\Model\Product\ProductList\Toolbar as ToolbarModel;

class Toolbar extends \Magento\Catalog\Block\Product\ProductList\Toolbar {

    /**
     * Set collection to pager
     *
     * @param \Magento\Framework\Data\Collection $collection
     * @return $this
     */
    public function setCollection($collection) {
        $this->_collection = $collection;

        $this->_collection->setCurPage($this->getCurrentPage());

        // we need to set pagination only if passed value integer and more that 0
        $limit = (int) $this->getLimit();
        if ($limit) {
            $this->_collection->setPageSize($limit);
        }
        if ($this->getCurrentOrder()) {
            switch ($this->getCurrentOrder()) {
                case 'price':
                    $this->_collection->setOrder($this->getCurrentOrder(), 'ASC');
                    break;
                case 'instore':
                    $this->_collection
                            ->getSelect()->order('stock_status_index.qty DESC');
                    break;
                case 'price_desc':
                    $this->_collection
                            ->getSelect()
                            ->order('price_index.price DESC');
                    break;
                default:
                    //$this->_collection->setOrder($this->getCurrentOrder(), $this->getCurrentDirection());
                    $this->_collection->setOrder($this->getCurrentOrder(), 'DESC');
                    break;
            }
        }
        return $this;
    }

}

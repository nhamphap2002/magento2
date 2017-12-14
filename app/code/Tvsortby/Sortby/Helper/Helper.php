<?php

/*
 * Created on : Dec 5, 2017, 2:33:47 PM
 * Author: Tran Trong Thang
 * Email: trantrongthang1207@gmail.com
 * Skype: trantrongthang1207
*/

namespace Tvsortby\Sortby\Helper;


class Data extends \Magento\Framework\App\Helper\AbstractHelper
{

    public function DisplayDiscountLabel($_product)
    {
        $originalPrice = $_product->getPrice();
        $finalPrice = $_product->getFinalPrice();

        $percentage = 0;
        if ($originalPrice > $finalPrice) {
            $percentage = number_format(($originalPrice - $finalPrice) * 100 / $originalPrice,0);
        }

        if ($percentage) {
            return $percentage."% DISCOUNT";
        }

    }
}
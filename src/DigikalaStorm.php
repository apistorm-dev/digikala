<?php
/**
 * @date_of_create: 7/16/2022 AD 16:19
 */

namespace YiiMan\Digikala;

use YiiMan\Digikala\Response\Product;
use YiiMan\Digikala\Response\product\Data;

class DigikalaStorm extends \YiiMan\ApiStorm\Core\Connection
{
    public $baseURL = 'api.digikala.com';
    public $protocol = 'https';

    /**
     * @param $productId
     * @return \YiiMan\ApiStorm\Core\Res|Data
     */
    public function getProduct($productId)
    {
        $product = $this->call('v1/product/'.$productId.'/', [], [], [], 'get', [], true);
        if ($product->isSuccess()) {
            return new Data($product);
        }
        return $product;
    }
}
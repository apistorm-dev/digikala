<?php

namespace YiiMan\Digikala\Response\category;

use YiiMan\Digikala\Response\product\Attributes;

/**
 * @property Brands[]    $brands
 * @property Colors[]    $colors
 * @property             $digiplus              {stdClass}
 * @property             $has_ship_by_seller    {stdClass}
 * @property PriceSlider $price                 {stdClass}
 * @property             $has_selling_stock     {stdClass}
 * @property             $has_ready_to_shipment {stdClass}
 * @property             $seller_types          {stdClass}
 * @property             $types                 {stdClass}
 * @property Attributes  $attributes
 */
class Filters extends \YiiMan\ApiStorm\Response\BaseResponse
{
    public $brands = 'classarray:YiiMan\Digikala\Response\category\Brands';
    public $colors = 'classarray:YiiMan\Digikala\Response\category\Colors';
    public $digiplus = 'object';
    public $has_ship_by_seller = 'object';
    public $price = 'class:YiiMan\Digikala\Response\category\PriceSlider';
    public $has_selling_stock = 'object';
    public $has_ready_to_shipment = 'object';
    public $seller_types = 'object';
    public $types = 'object';
    public $attributes = 'classarray:YiiMan\Digikala\Response\product\Attributes';
}
<?php

namespace YiiMan\Digikala\Response\product;


use YiiMan\ApiStorm\Response\BaseResponse;

/**
 * @property   int                                               $id
 * @property   string                                            $title_fa
 * @property   string                                            $title_en
 * @property   \YiiMan\Digikala\Response\url                     $url
 * @property   string                                            $status
 * @property   bool                                              $has_quick_view
 * @property   \YiiMan\Digikala\Response\product\Digiplus        $digiplus
 * @property   \YiiMan\Digikala\Response\product\Images          $images
 * @property    \YiiMan\Digikala\Response\product\Rating         $rating
 * @property   \YiiMan\Digikala\Response\product\Color[]         $colors
 * @property   stdClass                                          $default_variant
 * @property   stdClass                                          $properties
 * @property   array                                             $badges
 * @property   array                                             $videos
 * @property   stdClass                                          $category
 * @property   \YiiMan\Digikala\Response\product\Brand           $brand
 * @property   \YiiMan\Digikala\Response\product\Breadcrumb[]    $breadcrumb
 * @property   \YiiMan\Digikala\Response\product\Specification[] $specifications
 */
class Product extends BaseResponse
{
    public $id = 'int';
    public $title_fa = 'string';
    public $title_en = 'string';
    public $url = 'class:YiiMan\Digikala\Response\url';
    public $status = 'string';
    public $has_quick_view = 'bool';
    public $digiplus = 'class:YiiMan\Digikala\Response\product\Digiplus';
    public $images = 'class:YiiMan\Digikala\Response\product\Images';
    public $rating = 'class:YiiMan\Digikala\Response\product\Rating';
    public $colors = 'classarray:YiiMan\Digikala\Response\product\Color';
    public $badges = 'array';
    public $videos = 'array';
    public $brand = 'class:YiiMan\Digikala\Response\product\Brand';
    public $breadcrumb = 'classarray:YiiMan\Digikala\Response\product\Breadcrumb';
    public $specifications = 'classarray:YiiMan\Digikala\Response\product\Specification';
}
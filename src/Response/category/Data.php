<?php

namespace YiiMan\Digikala\Response\category;

use YiiMan\Digikala\Response\DigiRes;

/**
 * @property \YiiMan\Digikala\Response\category\Filters     $filters
 * @property \YiiMan\Digikala\Response\product\Product[]    $products
 * @property \YiiMan\Digikala\Response\product\Breadcrumb[] $breadcrumb
 * @property \YiiMan\Digikala\Response\category\Category    $category
 */
class Data extends DigiRes
{
    public
        $filters = 'key_in_object:data.filters',
        $products = 'key_in_object:data.products',
        $breadcrumb = 'key_in_object:data.breadcrumb',
        $category = 'key_in_object:data.category';
//        $recommendations = 'class:',
//        $data_layer = 'class:',
//        $seo = 'class:',
//        $intrack = 'class',
//        $landing_touchpoint = 'array';
}
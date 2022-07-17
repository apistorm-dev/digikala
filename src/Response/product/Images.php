<?php

namespace YiiMan\Digikala\Response\product;

/**
 * @property mainImage   $main
 * @property mainImage[] $list
 */
class Images extends \YiiMan\ApiStorm\Response\BaseResponse
{
    public $list = 'classArray:YiiMan\Digikala\Response\product\mainImage';
    public $main = 'class:YiiMan\Digikala\Response\product\mainImage';
}
<?php

namespace YiiMan\Digikala\Response\category;

/**
 * @property string      $type
 * @property string      $title
 * @property BrandOption[] $options
 */
class Brands extends \YiiMan\ApiStorm\Response\BaseResponse
{
    public $type = 'string';
    public $title = 'string';
    public $options = 'classarray:YiiMan\Digikala\Response\category\BrandOption';
}
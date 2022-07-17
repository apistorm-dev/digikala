<?php

namespace YiiMan\Digikala\Response\product;

/**
 * @property string            $type
 * @property string            $title
 * @property AttributeOption[] $options
 */
class Attributes extends \YiiMan\ApiStorm\Response\BaseResponse
{
    public $type = 'string';
    public $title = 'string';
    public $options = 'classarray:YiiMan\Digikala\Response\product\AttributeOption';
}
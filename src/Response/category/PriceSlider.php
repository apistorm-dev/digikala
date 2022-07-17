<?php
/**
 * @date_of_create: 7/17/2022 AD 10:36
 */

namespace YiiMan\Digikala\Response\category;

/**
 * @property string       $type
 * @property string       $title
 * @property PriceOptions $options
 */
class PriceSlider extends \YiiMan\ApiStorm\Response\BaseResponse
{
    public $type = 'string';
    public $title = 'string';
    public $options = 'class:YiiMan\Digikala\Response\category\PriceOptions';
}
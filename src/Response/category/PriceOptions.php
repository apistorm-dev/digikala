<?php
/**
 * @date_of_create: 7/17/2022 AD 10:37
 */

namespace YiiMan\Digikala\Response\category;

/**
 * @property int $min
 * @property int $max
 */
class PriceOptions extends \YiiMan\ApiStorm\Response\BaseResponse
{
    public $min = 'int';
    public $max = 'int';
}
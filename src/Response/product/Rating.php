<?php
/**
 * @date_of_create: 7/16/2022 AD 17:14
 */

namespace YiiMan\Digikala\Response\product;

/**
 * @property int $rate
 * @property int $count
 */
class Rating extends \YiiMan\ApiStorm\Response\BaseResponse
{
    public $rate = 'int';
    public $count = 'int';
}
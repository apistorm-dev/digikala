<?php
/**
 * @date_of_create: 7/16/2022 AD 17:16
 */

namespace YiiMan\Digikala\Response\product;

/**
 * @property int    $id
 * @property string $title
 * @property string $hex_code
 */
class Color extends \YiiMan\ApiStorm\Response\BaseResponse
{
    public $id = 'int';
    public $title = 'string';
    public $hex_code = 'string';
}
<?php
/**
 * @date_of_create: 7/17/2022 AD 10:33
 */

namespace YiiMan\Digikala\Response\category;

/**
 * @property int    $id
 * @property string $title
 * @property string $hex_code
 */
class ColorOption extends \YiiMan\ApiStorm\Response\BaseResponse
{
    public $id = 'int';
    public $title = 'string';
    public $hex_code = 'string';
}
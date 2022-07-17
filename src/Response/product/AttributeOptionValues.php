<?php
/**
 * @date_of_create: 7/17/2022 AD 10:51
 */

namespace YiiMan\Digikala\Response\product;

/**
 * @property int    $id
 * @property string $title_fa
 * @property string $title_en
 */
class AttributeOptionValues extends \YiiMan\ApiStorm\Response\BaseResponse
{
    public $id = 'int';
    public $title_fa = 'string';
    public $title_en = 'string';
}
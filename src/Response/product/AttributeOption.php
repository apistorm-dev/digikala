<?php
/**
 * @date_of_create: 7/17/2022 AD 10:50
 */

namespace YiiMan\Digikala\Response\product;

/**
 * @property int                     $id
 * @property string                  $type
 * @property string                  $title
 * @property AttributeOptionValues[] $options
 */
class AttributeOption extends \YiiMan\ApiStorm\Response\BaseResponse
{
    public $id = 'int';
    public $type = 'string';
    public $title = 'string';
    public $options = 'classarray:YiiMan\Digikala\Response\product\AttributeOptionValues';
}
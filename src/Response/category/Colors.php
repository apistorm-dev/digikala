<?php
/**
 * @date_of_create: 7/17/2022 AD 10:32
 */

namespace YiiMan\Digikala\Response\category;

/**
 * @property string        $type
 * @property string        $title
 * @property ColorOption[] $options
 */
class Colors extends \YiiMan\ApiStorm\Response\BaseResponse
{
    public $type = 'string';
    public $title = 'string';
    public $options = 'classarray:YiiMan\Digikala\Response\category\ColorOption';
}
<?php
/**
 * @date_of_create: 7/17/2022 AD 10:26
 */

namespace YiiMan\Digikala\Response\category;

use YiiMan\Digikala\Response\product\Logo;
use YiiMan\Digikala\Response\url;

/**
 * @property int     $id
 * @property string  $code
 * @property string  $title_fa
 * @property string  $title_en
 * @property url     $url
 * @property bool    $visibility
 * @property Logo    $logo
 * @property boolean $is_premium
 */
class BrandOption extends \YiiMan\ApiStorm\Response\BaseResponse
{
    public $id = 'int';
    public $code = 'string';
    public $title_fa = 'string';
    public $title_en = 'string';
    public $visibility = 'bool';
    public $is_premium = 'boolean';
    public $url = 'class:YiiMan\Digikala\Response\url';
    public $logo = 'class:YiiMan\Digikala\Response\product\Logo';
}
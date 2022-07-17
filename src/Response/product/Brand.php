<?php

namespace YiiMan\Digikala\Response\product;

use YiiMan\Digikala\Response\url;

/**
 * @property int                                    $id
 * @property string                                 $code
 * @property string                                 $title_fa
 * @property string                                 $title_en
 * @property \YiiMan\Digikala\Response\url          $url
 * @property boolean                                $visibility
 * @property \YiiMan\Digikala\Response\product\Logo $logo
 * @property boolean                                $is_premium
 * @property boolean                                $is_miscellaneous
 * @property boolean                                $is_name_similar
 */
class Brand extends \YiiMan\ApiStorm\Response\BaseResponse
{
    public $id = 'int';
    public $code = 'string';
    public $title_fa = 'string';
    public $title_en = 'string';
    public $url = 'class:\YiiMan\Digikala\Response\url';
    public $visibility = 'boolean';
    public $logo = 'class:\YiiMan\Digikala\Response\product\Logo';
    public $is_premium = 'boolean';
    public $is_miscellaneous = 'boolean';
    public $is_name_similar = 'boolean';
}
<?php
/**
 * @date_of_create: 7/16/2022 AD 17:29
 */

namespace YiiMan\Digikala\Response\product;

use YiiMan\Digikala\Response\url;

/**
 * @property string $title
 * @property url    $url
 */
class Breadcrumb extends \YiiMan\ApiStorm\Response\BaseResponse
{
    public $title = 'string';
    public $url = 'class:YiiMan\Digikala\Response\url';
}
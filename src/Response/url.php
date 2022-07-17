<?php
/**
 * @date_of_create: 7/16/2022 AD 16:51
 */

namespace YiiMan\Digikala\Response;

/**
 * @property string|null $base
 * @property string      $uri
 */
class url extends \YiiMan\ApiStorm\Response\BaseResponse
{
    public $base = 'string';
    public $uri = 'string';
}
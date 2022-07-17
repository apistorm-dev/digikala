<?php

namespace YiiMan\Digikala\Response\product;

/**
 * @property array  $storage_ids
 * @property array  $url
 * @property string $thumbnail_url
 * @property int    $temporary_id
 */
class Logo extends \YiiMan\ApiStorm\Response\BaseResponse
{
    public $storage_ids = 'array';
    public $url = 'array';
    public $thumbnail_url = 'string';
    public $temporary_id = 'int';
}
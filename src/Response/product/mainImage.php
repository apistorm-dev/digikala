<?php
/**
 * @date_of_create: 7/16/2022 AD 17:07
 */

namespace YiiMan\Digikala\Response\product;

/**
 * @property array  $storage_ids
 * @property array  $url
 * @property string $thumbnail_url
 * @property string $temporary_id
 */
class mainImage extends \YiiMan\ApiStorm\Response\BaseResponse
{
    public $storage_ids = 'array';
    public $url = 'array';
    public $thumbnail_url = 'string';
    public $temporary_id = 'string';
}
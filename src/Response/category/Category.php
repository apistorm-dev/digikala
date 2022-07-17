<?php
/**
 * @date_of_create: 7/17/2022 AD 10:14
 */

namespace YiiMan\Digikala\Response\category;

/**
 * @property int    $id
 * @property string $title_fa
 * @property string $title_en
 * @property string $code
 * @property string $description_fa
 * @property string $description_en
 */
class Category extends \YiiMan\ApiStorm\Response\BaseResponse
{
    public $id = 'int';
    public $title_fa = 'string';
    public $title_en = 'string';
    public $code = 'string';
    public $description_fa = 'string';
    public $description_en = 'string';
}
<?php


namespace YiiMan\Digikala\Response\product;

/**
 * @property array $services
 * @property bool  $is_jet_eligible
 * @property int   $cash_back
 * @property bool  $is_general_location_jet_eligible
 */
class Digiplus extends \YiiMan\ApiStorm\Response\BaseResponse
{
    public $services = 'array';
    public $is_jet_eligible = 'bool';
    public $cash_back = 'int';
    public $is_general_location_jet_eligible = 'bool';
}
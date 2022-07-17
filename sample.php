<?php
require __DIR__.'/vendor/autoload.php';
use YiiMan\Digikala\DigikalaStorm;

$sdk = new DigikalaStorm();
$product = $sdk->getProduct('3699809');
if ($product->isSuccess()) {
    $title=$product->product->title_fa;
    $specs=$product->product->specifications[0]->attributes;
    print_r($title);
    print_r($specs);
}

<?php

namespace classes\product;
use \classes\Product;

class Smartphone extends Product implements \SmartphoneInterface
{
    protected $color;
    protected $model;

    use \SmartphoneTrait;
}
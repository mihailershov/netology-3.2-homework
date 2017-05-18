<?php

namespace purchase\product\children;

use purchase\product\Product;
use \purchase\product\children\traits\Smartphone as SmartphoneTrait;
use \purchase\product\interfaces\Smartphone as SmartphoneInterface;

class Smartphone extends Product implements SmartphoneInterface
{
    protected $color;
    protected $model;

    use SmartphoneTrait;
}
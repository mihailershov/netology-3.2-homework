<?php

namespace purchase\product\children;

use \purchase\product\Product;

class BagOfPotatoes extends Product
{
    protected $thePotatoWeight;
    protected $numberOfPotatoes;

    public function getWeight()
    {
        return $this->thePotatoWeight * $this->numberOfPotatoes + 200; // 200 - вес сетки
    }
}
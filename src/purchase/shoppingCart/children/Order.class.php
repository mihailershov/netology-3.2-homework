<?php

namespace purchase\shoppingCart\children;
use \purchase\shoppingCart\ShoppingCart;

class Order extends ShoppingCart
{
    // Получаем продукт, теперь можно с ним манипулировать и выводить инфу о нем при помощи html.
    public function getProduct($product)
    {
        $index = $this->searchProduct($product);
        if ($index !== false) return $this->products[$index];
        return false;
    }
}
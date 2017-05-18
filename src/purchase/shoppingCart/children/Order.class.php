<?php

namespace purchase\shoppingCart\children;
use \purchase\shoppingCart\ShoppingCart;

class Order extends ShoppingCart
{
    // Получаем продукт, теперь можно с ним манипулировать и выводить инфу о нем при помощи html.
    public function getProduct($product)
    {
        $index = self::searchProduct($product);
        if ($index !== false) return self::$products[$index];
        return false;
    }
}
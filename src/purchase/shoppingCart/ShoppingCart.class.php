<?php

namespace purchase\shoppingCart;
use app\exceptions\all\IsNotExistException;

class ShoppingCart
{
    protected static $products = [];

    public static function addToCart($product)
    {
        try {
            if (!$product->getProperty('price')) {
                throw new IsNotExistException('Product don\'t have a price');
            }
            self::$products[$product->getProperty('title')] = $product;
        } catch (IsNotExistException $e){
            echo 'Невозможно добавить в корзину (' . $e->getMessage() . ');<br>';
        }
    }

    public static function getOrderPrice()
    {
        $orderPrice = 0;
        foreach (self::$products as $product) {
            $orderPrice = $orderPrice + $product->getProperty('price');
        }
        return $orderPrice;
    }

    public static function searchProduct($product)
    {
        $index = array_search($product, self::$products, true);
        if (!$index && $index !== 0) {
            return false;
        }
        return $index;
    }

    public static function removeProductFromShoppingCart($product)
    {
        $index = self::searchProduct($product);
        if ($index !== false) unset(self::$products[$index]);
    }

    public static function getProducts()
    {
        return self::$products;
    }
}
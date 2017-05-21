<?php

namespace purchase\shoppingCart;

use purchase\product\Product;
use app\exceptions\all\IsNotExistException;

class ShoppingCart
{
    protected $products = [];

    public function addToCart(Product $product)
    {
        try {
            if (!$product->getProperty('price')) {
                throw new IsNotExistException('Product don\'t have a price');
            }
            $this->products[$product->getProperty('title')] = $product;
        } catch (IsNotExistException $e){
            echo 'Невозможно добавить в корзину (' . $e->getMessage() . ');<br>';
        }
    }

    public function getOrderPrice()
    {
        $orderPrice = 0;
        foreach ($this->products as $product) {
            $orderPrice = $orderPrice + $product->getProperty('price');
        }
        return $orderPrice;
    }

    public function searchProduct(Product $product)
    {
        $index = array_search($product, $this->products, true);
        if (!$index && $index !== 0) {
            return false;
        }
        return $index;
    }

    public function removeProduct(Product $product)
    {
        $index = $this->searchProduct($product);
        if ($index !== false) unset($this->products[$index]);
    }

    public function getProducts()
    {
        return $this->products;
    }
}
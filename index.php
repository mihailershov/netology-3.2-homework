<?php

require_once 'core.php';
use \purchase\product\children as product;
use \purchase\shoppingCart\ShoppingCart as ShoppingCart;

if (new product\Smartphone('Sony Xperia Z5', 40000, 'tech', 0.2)) echo '<p style="color: green;">Объект класса Smartphone создан</p><hr>';
if ($car = new product\Car('BMW', 2300000, 'Car.interface', 1700)) echo '<p style="color: green;">Объект класса Car создан</p><hr>';
if ($bagOfPotatoes = new product\BagOfPotatoes('Avrora', 20, 'food', 12)) echo '<p style="color: green;">Объект класса BagOfPotatoes создан</p><hr>';

// Пример добавления товара с некорректной логикой
$shoppingCart = new ShoppingCart;
$shoppingCart->addToCart($bagOfPotatoes);
echo '<pre>';
var_dump($shoppingCart->getProducts());
echo '</pre>';
$car->setProperty('price', null);
$shoppingCart->addToCart($car);
echo '<pre>';
var_dump($shoppingCart->getProducts());
echo '</pre>';
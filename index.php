<?php

require_once 'core.php';
use \purchase\product\children as product;
use \purchase\shoppingCart\ShoppingCart as ShoppingCart;

if (new product\Smartphone('Sony Xperia Z5', 40000, 'tech', 0.2)) echo '<p style="color: green;">Объект класса Smartphone создан</p><hr>';
if ($car = new product\Car('BMW', 2300000, 'Car.interface', 1700)) echo '<p style="color: green;">Объект класса Car создан</p><hr>';
if ($bagOfPotatoes = new product\BagOfPotatoes('Avrora', 20, 'food', 12)) echo '<p style="color: green;">Объект класса BagOfPotatoes создан</p><hr>';

// Пример добавления товара с некорректной логикой
ShoppingCart::addToCart($bagOfPotatoes);
var_dump(ShoppingCart::getProducts());
$car->setProperty('price', null);
ShoppingCart::addToCart($car);
var_dump(ShoppingCart::getProducts());

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            max-width: 800px;
            margin: auto;
        }
    </style>
</head>
<body>
</body>
</html>


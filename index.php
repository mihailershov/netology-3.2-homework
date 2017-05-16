<?php

require_once 'src/core.php';

$smartphone = new classes\product\Smartphone('Sony Xperia Z5', 40000, 'tech', 0.2);
/*
echo $smartphone->totalPrice() . PHP_EOL;
$smartphone->setPropertyWithReturn('color', 'black')->setPropertyWithReturn('model', 'android');
if (!$smartphone->areYouRich()) echo 'Вы бедны';
*/


$car = new classes\product\Car('BMW', 2300000, 'car', 1700);
/*
$car->setOilVolume(45);
if ($car->isHasOil()) echo 'Бенз есть' . PHP_EOL;
*/

$bagOfPotatoes = new classes\product\BagOfPotatoes('Avrora', 20, 'food', 12);
/*
echo $bagOfPotatoes->getProperty('price') . PHP_EOL;
echo $bagOfPotatoes->totalPrice() . PHP_EOL;
*/

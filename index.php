<?php

require_once 'core.php';
use \purchase\product\children as product;

$smartphone = new product\Smartphone('Sony Xperia Z5', 40000, 'tech', 0.2);
$car = new product\Car('BMW', 2300000, 'Car.interface', 1700);
$bagOfPotatoes = new product\BagOfPotatoes('Avrora', 20, 'food', 12);


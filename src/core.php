<?php

/*
 *
 * Здесь будет autoload
 *
*/


// Суперкласс и его интерфейс
require_once 'interfaces/ProductInterface.php';
require_once 'classes/Product.php';

// Первый тип (техника) и его интерфейс + trait (для эксперимента)
require_once 'interfaces/SmartphoneInterface.php';
require_once 'traits/SmartphoneTrait.php';
require_once 'classes/Product/Smartphone.php';

// Второй тип (машина) и его интерфейс
require_once 'interfaces/CarInterface.php';
require_once 'classes/Product/Car.php';

// Третий тип (еда)
require_once 'classes/Product/BagOfPotatoes.php';
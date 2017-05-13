<?php

// Суперкласс и его интерфейс
require_once 'classes/interfaces/ProductInterface.php';
require_once 'classes/Product.php';

// Первый тип (техника) и его интерфейс + trait (для эксперимента)
require_once 'classes/interfaces/SmartphoneInterface.php';
require_once 'classes/traits/SmartphoneTrait.php';
require_once 'classes/Smartphone.php';

// Второй тип (машина) и его интерфейс
require_once 'classes/interfaces/CarInterface.php';
require_once 'classes/Car.php';

// Третий тип (еда)
require_once 'classes/BagOfPotatoes.php';
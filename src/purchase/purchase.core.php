<?php

namespace purchase;

function productAutoload($className) {
    $path = rtrim(__DIR__, 'purchase') . str_replace('\\', DS,$className) . '.class.php';
    echo __FUNCTION__ . '<br>' . '<hr>';
    var_dump($path);
    if (file_exists($path)) {
        echo "<p style='background-color: lightgreen;'>Найден файл по пути $path</p> <br>";
        include_once $path;
    }
}

function shoppingCartAutoload($className) {
    $path = rtrim(__DIR__, 'purchase') . str_replace('\\', DS,$className) . '.class.php';
    echo __FUNCTION__ . '<br>' . '<hr>';
    var_dump($path);
    if (file_exists($path)) {
        echo "<p style='background-color: lightgreen;'>Найден файл по пути $path</p> <br>";
        include_once $path;
    }
}

function parentAutoload($className) {
    $path = rtrim(__DIR__, 'purchase') . str_replace('\\', DS,$className) . '.class.php';
    echo __FUNCTION__ . '<br>' . '<hr>';
    var_dump($path);
    if (file_exists($path)) {
        echo "<p style='background-color: lightgreen;'>Найден файл по пути $path</p> <br>";
        include_once $path;
    }
}

function interfacesAutoload($interfaceName) {
    $path = rtrim(__DIR__, 'purchase') . str_replace('\\', DS,$interfaceName) . '.interface.php';
    echo __FUNCTION__ . '<br>' . '<hr>';
    var_dump($path);
    if (file_exists($path)) {
        echo "<p style='background-color: lightgreen;'>Найден файл по пути $path</p> <br>";
        include_once $path;
    }
}

function traitsAutoload($traitName) {
    $path = rtrim(__DIR__, 'purchase') . str_replace('\\', DS,$traitName) . '.trait.php';
    echo __FUNCTION__ . '<br>' . '<hr>';
    var_dump($path);
    if (file_exists($path)) {
        echo "<p style='background-color: lightgreen;'>Найден файл по пути $path</p> <br>";
        include_once $path;
    }
}

/*require_once 'product/interfaces/Car.interface.php';
require_once 'product/interfaces/Product.interface.php';
require_once 'product/interfaces/Smartphone.interface.php';*/

spl_autoload_register('purchase\interfacesAutoload');
spl_autoload_register('purchase\parentAutoload');
spl_autoload_register('purchase\productAutoload');
spl_autoload_register('purchase\traitsAutoload');
spl_autoload_register('purchase\shoppingCartAutoload');
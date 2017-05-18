<?php

namespace purchase;

function productAutoload($className) {
    $path = rtrim(__DIR__, 'purchase') . str_replace('\\', DS,$className) . '.class.php';
    if (file_exists($path)) {
        include_once $path;
    }
}

function shoppingCartAutoload($className) {
    $path = rtrim(__DIR__, 'purchase') . str_replace('\\', DS,$className) . '.class.php';
    if (file_exists($path)) {
        include_once $path;
    }
}

function parentAutoload($className) {
    $path = rtrim(__DIR__, 'purchase') . str_replace('\\', DS,$className) . '.class.php';
    if (file_exists($path)) {
        include_once $path;
    }
}

function interfacesAutoload($interfaceName) {
    $path = rtrim(__DIR__, 'purchase') . str_replace('\\', DS,$interfaceName) . '.interface.php';
    if (file_exists($path)) {
        include_once $path;
    }
}

function traitsAutoload($traitName) {
    $path = rtrim(__DIR__, 'purchase') . str_replace('\\', DS,$traitName) . '.trait.php';
    if (file_exists($path)) {
        include_once $path;
    }
}

spl_autoload_register('purchase\interfacesAutoload');
spl_autoload_register('purchase\parentAutoload');
spl_autoload_register('purchase\productAutoload');
spl_autoload_register('purchase\traitsAutoload');
spl_autoload_register('purchase\shoppingCartAutoload');
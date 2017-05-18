<?php

namespace purchase;

function purchaseAutoload($className) {
    $path = rtrim(rtrim(__DIR__, DS), 'purchase') . str_replace('\\', DS,$className) . '.class.php';
    if (file_exists($path)) {
        echo "<p style='color:orange;'>Класс $className загружен</p>";
        include_once $path;
    }
}

function interfacesAutoload($interfaceName) {
    $path = rtrim(rtrim(__DIR__, DS), 'purchase') . str_replace('\\', DS,$interfaceName) . '.interface.php';
    if (file_exists($path)) {
        echo "<p style='color:orange;'>Интерфейс $interfaceName загружен</p>";
        include_once $path;
    }
}

function traitsAutoload($traitName) {
    $path = rtrim(rtrim(__DIR__, DS), 'purchase') . str_replace('\\', DS,$traitName) . '.trait.php';
    if (file_exists($path)) {
        echo "<p style='color:orange;'>Примесь $traitName загружена</p>";
        include_once $path;
    }
}

spl_autoload_register('purchase\interfacesAutoload');
spl_autoload_register('purchase\purchaseAutoload');
spl_autoload_register('purchase\traitsAutoload');
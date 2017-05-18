<?php

function exceptionsAutoload($exceptionName) {
    $path = rtrim(__DIR__, 'app\exceptions') . DS . str_replace('\\', DS,$exceptionName) . '.php';
    if (file_exists($path)) {
        var_dump($path);
        include_once $path;
    }
}

spl_autoload_register('exceptionsAutoload');
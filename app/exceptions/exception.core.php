<?php

spl_autoload_register(function ($exceptionName) {
    $path = rtrim(__DIR__, 'app\exceptions') . DS . str_replace('\\', DS,$exceptionName) . '.php';
    if (file_exists($path)) {
        include_once $path;
    }
});
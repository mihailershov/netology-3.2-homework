<?php

spl_autoload_register(function ($exceptionName) {
    $path = rtrim(rtrim(__DIR__, DS), 'app' . DS . 'exceptions') . DS . str_replace('\\', DS,$exceptionName) . '.php';
    if (file_exists($path)) {
        include_once $path;
    }
});
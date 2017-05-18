<?php

define('DS', DIRECTORY_SEPARATOR);

spl_autoload_register(function ($className) {
    $path = rtrim(__DIR__, DS) . DS . 'all' . DS . $className . '.exception.php';
    if (file_exists($path)) {
        require_once $path;
    }
});
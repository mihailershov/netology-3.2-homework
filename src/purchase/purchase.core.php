<?php

namespace purchase;

spl_autoload_register(function ($filename) {

    $paths[] = rtrim(rtrim(__DIR__, DS), 'purchase') . str_replace('\\', DS,$filename) . '.class.php';
    $paths[] = rtrim(rtrim(__DIR__, DS), 'purchase') . str_replace('\\', DS,$filename) . '.interface.php';
    $paths[] = rtrim(rtrim(__DIR__, DS), 'purchase') . str_replace('\\', DS,$filename) . '.trait.php';

    foreach ($paths as $path) {
        if (file_exists($path)) {
            echo "<p><span style='color:orange;'>$filename</span> загружен</p>";
            include $path;
        }
    }
});
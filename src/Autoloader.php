<?php

spl_autoload_register(function ($class) {

   
    $class = ltrim($class, '\\');

    $classPath = str_replace('\\', DIRECTORY_SEPARATOR, $class);

    $classPath = str_replace('_', DIRECTORY_SEPARATOR, $classPath);
    
    $file = __DIR__ . DIRECTORY_SEPARATOR . $classPath . '.php';

    if (file_exists($file)) {
        require_once $file;
    }
});

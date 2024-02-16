<?php
spl_autoload_register(function ($class) {
    $classFile = $class . '.php';

    if (is_file($classFile) && !class_exists($class))
        require_once $classFile;
});

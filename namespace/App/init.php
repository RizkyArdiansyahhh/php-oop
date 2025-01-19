<?php

// require_once 'Product/User.php';
// require_once 'Services/User.php';


spl_autoload_register(function ($className){
    $path = str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';
    if(file_exists($path)){
        require_once $path;
    }
});
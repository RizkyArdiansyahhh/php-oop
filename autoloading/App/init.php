<?php



spl_autoload_register(function ($className){
    require_once __DIR__ . '/Product/' . $className .'.php';
});
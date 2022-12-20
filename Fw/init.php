<?php
session_start();

function my_autoloader($class) {
    $class = str_replace("\\", "/", $class);
    require __DIR__."/$class.php";
}

spl_autoload_register("my_autoloader");
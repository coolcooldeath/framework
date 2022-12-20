<?php
session_start();

function myAutoloader($class) {
    $class = str_replace("\\", "/", $class);
    require __DIR__."/$class.php";
}
spl_autoload_register("myAutoloader");

use Core\Application;
use Core\InstanceContainer;

$application = InstanceContainer::getInstance(Application::class);
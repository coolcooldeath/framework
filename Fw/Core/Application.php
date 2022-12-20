<?php

namespace Core;

class Application
{
    private $pager = null; // будет объект класса
    private static $instance = null;
    private $template = null; //будет объект класса
    private function __clone() {}
    private function __wakeup() {}
    private function __construct(){}

    public static function getInstance()
    {
        if(self::$instance === null){
            self:: $instance = new self();
        }
        return self::$instance;
    }


}
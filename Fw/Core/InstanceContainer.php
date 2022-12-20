<?php

namespace Core;

class InstanceContainer {
    private static $instances = array();
    public static function getInstance($class) {
        if(!isset(self::$instances[$class]) ) {
            self::$instances[$class] = new $class;
        }
        return self::$instances[$class];
    }

}

<?php

namespace Core;

class Config
{
    public static function get(string $path) {
        if (!self::$config)
            self::$config = require_once(__DIR__ . "/../config.php");

        if(isset(self::$config)){
            $path_arr= explode("/", $path);
//
//            echo "<pre>";
//            print_r(self::$config);
//            echo "</pre>";

            $data = self::$config;
            for ($i = 0; $i < count($path_arr); $i++)
                $data = $data[$path_arr[$i]];

        }


        return $data;
    }

    private static $config;

}
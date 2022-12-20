<?php

namespace Core;

class Application
{
    private $pager = null; // будет объект класса
    private static $instance = null;
    private $template = null; //будет объект класса


    private static function startBuffer()
    {
        ob_start();
    }
    private static function endBuffer()
    {
        $content= ob_get_contents();
        self::restartBuffer();
        $content = str_replace("bad_title", "good", $content);
        print_r($content);




    }

    public function restartBuffer()
    {
            ob_clean();
    }

    public static function header()
    {
        include 'Fw/templates/1/header.php';
        self::startBuffer();




    }
    public static function footer()
    {
        self::endBuffer();
        include 'Fw/templates/1/footer.php';
    }


}
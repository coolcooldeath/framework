<?php

namespace Core;
class Application
{

    private $pager = null; // будет объект класса
    private static $instance = null;
    private $template = null; //будет объект класса


    public function getPager()
    {
        return $this->pager;
    }

    function __construct()
    {
        $this->pager = InstanceContainer::getInstance(Page::class);
    }


    private function startBuffer()
    {
        ob_start();
    }
    private function endBuffer()
    {
        $content= ob_get_contents();
        $this->restartBuffer();
        $content = $this->pager->getAllReplace($content);
        echo $content;
    }

    public function restartBuffer()
    {
            ob_clean();
    }

    public  function header()
    {
        $this->startBuffer();
        include 'Fw/templates/1/header.php';
    }
    public  function footer()
    {
        include 'Fw/templates/1/footer.php';
        $this->endBuffer();
    }


}
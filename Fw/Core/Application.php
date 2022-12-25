<?php

namespace Core;
use Core\Type\Request;
use Core\Type\Server;
use Core\Type\Session;

class Application
{

    private $pager = null; // будет объект класса
    private static $instance = null;
    private $template = null; //будет объект класса
    private Request $request;
    private Session $session;
    private Server $server;


    public function getPager()
    {
        return $this->pager;
    }

    function __construct()
    {
        $this->pager = InstanceContainer::getInstance(Page::class);
        $this->request = InstanceContainer::getInstance(Request::class);
        $this->session = InstanceContainer::getInstance(Session::class);
        $this->server = InstanceContainer::getInstance(Server::class);
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


    public function getRequest(): Request
    {
        return $this->request;
    }


    public function getSession(): Session
    {
        return $this->session;
    }


    public function getServer(): Server
    {
        return $this->server;
    }


}
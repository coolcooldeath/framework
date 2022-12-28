<?php

namespace Core;
use Core\Type\Request;
use Core\Type\Server;
use Core\Type\Session;
use Exception;
class Application
{
    private array $componentsArray = [];
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


    public function includeComponent(string $component, string $template, array $params)
    {
        $component_id = explode(':', $component)[1];
        $class_name  = '';
        foreach (explode('.',$component_id) as $item) $class_name .= ucfirst($item);
        $path = "/components/" . str_replace(":","/",$component);
        if(!isset($this->componentsArray[$component])) {
                $class = $this->server->get('DOCUMENT_ROOT') . "/public/framework/Fw" . $path . "/.class.php";
                try{
                    if(file_exists($class)){
                        $this->componentsArray[$component] = $class_name;
                        require_once $class;
                    }
                    else
                        throw new Exception("File not found");
                }
                catch (Exception $e){
                    echo $e . "</br>";
                }




        }
        $obj = new $this->componentsArray[$component]($component_id, $template, $params, $path);
        $obj->executeComponent();
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
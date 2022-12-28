<?php


namespace Core\Component;


use Core\Application;
use Core\InstanceContainer;

class Template
{
    public  string $path; // путь к файловой структуре шаблона (абсолютный путь)
    public  string $relativePath; // url к файловой структуре шаблона (относительный путь)
    public  string $id; // строковый id шаблона (в нашем случае  default)
    public $component; // строковый id шаблона (в нашем случае  default)
    public  Application $app;

    public function __construct(string $id, Base $component) //В конструкторе мы должны указать жёскую зависимость от компонента
    {
        $this->component = $component;
        $this->app = InstanceContainer::getInstance(Application::class);
        $this->id = $id;
        $this->relativePath = "/public/framework/Fw" . $component->path . "/templates/" . $this->id;
        $this->path = $this->app->getServer()->get('DOCUMENT_ROOT') .   $this->relativePath;
    }


    public function render(string $page = "template")
    {

        $css = '/style.css';
        $js = '/script.js';
        $template_path = $this->path . '/' . $page . '.php';
        $app = InstanceContainer::getInstance(Application::class);
        $pager = $app->getPager();
        if (file_exists($template_path))
            include $template_path;



        if (file_exists($this->path . $css))
            $pager->addCss($this->relativePath . $css);






        if (file_exists($this->path . $js))
            $pager->addJs($this->relativePath . $js);


    }
}
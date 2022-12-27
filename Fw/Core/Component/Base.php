<?php


namespace Core\Component;


abstract class Base
{
    public array $result; // массив с результатом работы комопнента
    public string $id; // строковый id компонента
    public array $params; // входящие параметры компонента
    public Template $template; // экземпляр класса шаблона компонента
    public string $path; // путь к файловой структуре namespace+component_id

    abstract public function executeComponent();

    public function __construct($id, $template_id, $params, $path)
    {
        $this->id = $id;
        $this->params = $params;
        $this->path = $path;
        $this->template = new Template($template_id, $this);
    }
}
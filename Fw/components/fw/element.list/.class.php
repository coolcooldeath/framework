<?php
use Core\Component\Base;
class ElementList extends Base
{

    public function __construct($id, $template_id, $params, $path)
    {
        parent::__construct($id, $template_id, $params, $path);
    }

    public function executeComponent()
    {
        echo "<pre>";
        print_r($this->params);
        echo "</pre>";
        $this->template->render();
    }
}
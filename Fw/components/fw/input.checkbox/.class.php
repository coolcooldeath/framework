<?php
use Core\Component\Base;
class InputCheckbox extends Base
{

    public function __construct($id, $template_id, $params, $path)
    {
        parent::__construct($id, $template_id, $params, $path);
    }

    public function executeComponent()
    {
        $this->template->render();
    }
}
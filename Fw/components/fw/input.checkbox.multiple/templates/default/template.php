<?php
use Core\InstanceContainer;
use Core\Application;
$params = $this->component->params;
$application = InstanceContainer::getInstance(Application::class);
?>
<div class="<?=$params["div-class"]?>">
    <?php
    for ($checkboxIndex = 0; $checkboxIndex<count($params["checkboxes"]);$checkboxIndex++){
        $checkbox = $params["checkboxes"][$checkboxIndex];
        $application->includeComponent(
            'fw:input.checkbox',
            'default',
            [
                "name" => $params["name"],
                "title" => $checkbox["title"],
                "value" => $checkbox["value"],
                "id" => $checkbox["id"],
                "type" =>"checkbox",
                "class" => "input-checkbox"
            ]
        );
    }
    ?>
</div>

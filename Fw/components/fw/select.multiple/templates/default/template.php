<?php
use Core\InstanceContainer;
use Core\Application;
$params = $this->component->params;
$application = InstanceContainer::getInstance(Application::class);
?>
<div class="<?=$params["div-class"]?>">
    <?php
    for ($selectIndex = 0; $selectIndex<count($params["selects"]);$selectIndex++){
        $select = $params["selects"][$selectIndex];
        $application->includeComponent(
            'fw:select',
            'default',
            [
                "options" => $select["options"],
                "title" => $select["title"],
                "name" => $select["name"],
                "class" => $select["class"],
                "div-class" => $select["div-class"],
                "id" => $select["id"]
            ]
        );
    }
    ?>
</div>

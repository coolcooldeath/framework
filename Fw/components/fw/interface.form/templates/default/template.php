<?php
use Core\InstanceContainer;
use Core\Application;
$params = $this->component->params;
$application = InstanceContainer::getInstance(Application::class);
?>
<form method="<?=$params['method']?>" action="<?=$params['action']?>" class="<?=$params["div-class"]?>">
    <?php
    for ($elementsIndex = 0; $elementsIndex<count($params["elements"]);$elementsIndex++){
        $element = $params["elements"][$elementsIndex];
        $application->includeComponent(
            $element["elemType"],       //'fw:input.text',
            'default',
            $element["params"]

        );
    }
    ?>
</form>

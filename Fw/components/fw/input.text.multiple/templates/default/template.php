<?php
use Core\InstanceContainer;
use Core\Application;
$params = $this->component->params;
$application = InstanceContainer::getInstance(Application::class);
?>
<div class="<?=$params["div-class"]?>">
    <p><?echo $params["title"]?></p>
    <?php
    for ($inputTextIndex = 0; $inputTextIndex<count($params["inputTexts"]);$inputTextIndex++){
        $inputText = $params["inputTexts"][$inputTextIndex];
        $application->includeComponent(
            'fw:input.text',
            'default',
            [
                "type" => "text",
                "name" => $inputText["name"],
                "title" => $inputText["title"],
                "default" => $inputText["default"],
                "class" => $inputText["class"],
                "div-class" => $inputText["div-class"]
            ]
        );
    }
    ?>
</div>

<?php
$params = $this->component->params;

?>
<div class="<?=$params["div-class"]?>">
    <H2><?=$params['title']?> </H2>
    <input
            type="<?=$params["type"]?>"
            name = "<?=$params["name"]?>"
            class = "<?=$params["class"]?>"
            placeholder="<?=$params['default']?>"
    >
    </br>
</div>

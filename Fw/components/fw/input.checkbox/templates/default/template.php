<?php

$params = $this->component->params;

?>
<div class="<?=$params["div-class"]?>">
    <input
            type="<?=$params["type"]?>"
            name = "<?=$params["name"]?>"
            class = "<?=$params["class"]?>"
            value = "<?=$params["value"]?>"
            id = "<?=$params["id"]?>"
        <?php if(isset($params["attr"])) {
            foreach ($params["attr"] as $key=>$value){
                echo $key . "=". "$value ";
            }
        }?>

    >
    <span><?=$params['title']?> </span>
</div>


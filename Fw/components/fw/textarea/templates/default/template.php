<?php
$params = $this->component->params;

?>
<div class="<?=$params["div-class"]?>">
    <p><?=$params['title']?></p>
    <textarea
            name = "<?=$params["name"]?>"
            class = "<?=$params['class']?>"
            placeholder="<?=$params['default']?>"
    <?php if(isset($params["attr"])) {
        foreach ($params["attr"] as $key=>$value){
            echo $key . "=". "$value ";
        }
    }?>
></textarea>
</div>

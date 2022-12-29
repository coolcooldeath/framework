<?php
$params = $this->component->params;

?>
<div class="<?=$params["div-class"]?>">
    <span><?=$params["title"]?></span>
    <select
            name="<?=$params["name"]?>"
            class="<?=$params["class"]?>"
            id="<?=$params["id"]?>"
        <?php if(isset($params["attr"])) {
            foreach ($params["attr"] as $key=>$value) {
                echo $key . "=". "$value ";
            }
        }?>
    >
        <?php for ($optionId=0;$optionId<count($params["options"]); $optionId++) {
            $option = $params["options"][$optionId]?>
            <option value="<?php echo $option["value"]?>">
                <?php echo $option["title"]?>
            </option>
        <?php }?>
    </select>
</div>


<?php
if(!defined("CORE")){
    die();
}
use Core\InstanceContainer;
use Core\Application;
$pager = InstanceContainer::getInstance(Application::class)->getPager();
?>
    <H3><?php echo "element.list header";?></H3>

</body>
</html>
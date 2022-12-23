<?php
if(!defined("CORE")){
    die();
}
use Core\InstanceContainer;
use Core\Application;
$pager = InstanceContainer::getInstance(Application::class)->getPager();
?>
<footer>
    <H3><?php $pager->showProperty('H3');?></H3>
</footer>
</body>
</html>
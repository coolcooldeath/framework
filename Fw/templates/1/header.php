
<?php
if(!defined("CORE")){
    die();
}
use Core\InstanceContainer;
use Core\Application;
$pager = InstanceContainer::getInstance(Application::class)->getPager();
?>
<!doctype html>
<html lang="en">
<head>
    <title>
        <?= $pager->showProperty('title'); ?>
    </title>
    <?= $pager->showHead(); ?>


</head>
<body>
<header>
    <H2><?php $pager->showProperty('H2');?></H2>



</header>
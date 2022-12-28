<?php

require dirname(__DIR__) . '/framework/Fw/init.php';
use Core\Config;
use Core\Application;
use Core\Type\Dictionary;
if(!defined("CORE")){
    die();
}

$application->header();
$pager = $application->getPager();
$pager->addString('<meta charset="UTF-8">');
$pager->addJs("https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js");
$pager->addCss("https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css");
$pager->addCss("Fw/templates/1/css/general.css");
$pager->addCss("Fw/templates/1/css/main-page.css");
$pager->setProperty('H2','История изменения проекта');
$pager->setProperty('H3','История изменения проекта');
$pager->setProperty('title','История изменения проекта');
$application->includeComponent(
    'fw:input.text',
    'default',
    [
        "type" => "text",
        "name" => "name",
        "title" => "Name",
        "default" => "Enter your name",
        "div-class" => "div-text",
        "class" => "input-text"
    ]
);

?>
<pre>
    -------- 20.12.2022 --------
    1) создана структура файлов
    2) создан класс Application
    3) создан класс Config
    -------- 21.12.2022 --------
    1) создан класс InstanceContainer
    2) cоздание структуры шаблона сайта
    3) внедрение буффера
    -------- 22.12.2022 --------
    1) cоздан класс Page
    2) реализована инициализация Page
    -------- 23.12.2022 --------
    1) создание страницы истории изменения проекта
    2) создание переменной ядра
    3) исправление ошибок


</pre>

<?php
$application->footer();


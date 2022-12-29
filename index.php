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
    'fw:input.text.multiple',
    'default',
    [
        "inputTexts" => [
            0=>[
                "name" => "name",
                "title" => "name",
                "default" => "Name",
                "class" => "input-text",
                "div-class" => "div-single-text"
            ],
            1=>[
                "name" => "login",
                "title" => "login",
                "default" => "Login",
                "class" => "input-text",
                "div-class" => "div-single-text"],
            2=>[
                "name" => "lastname",
                "title" => "lastname",
                "default" => "Lastname",
                "class" => "input-text",
                "div-class" => "div-single-text"]
        ],
        "title" => "Blank",
        "div-class" => "div-text"
    ]
);

$application->includeComponent(
    'fw:input.password',
    'default',
    [
        "default" => "Enter your password",
        "type" => "password",
        "name" => "password",
        "title" => "Password",
        "div-class" => "div-text",
        "class" => "input-password"
    ]
);

$application->includeComponent(
    'fw:textarea',
    'default',
    [
        "name" => "text",
        "title" => "TextArea",
        "div-class" => "div-text",
        "default" => "Enter your text",
        "class" => "input-textarea"
    ]
);


$application->includeComponent(
    'fw:input.checkbox.multiple',
    'default',
    [
        "checkboxes" => [
                0=>[
                   "title" => "Apple",
                   "value" => "Apple",
                   "id" => "apple_id"
               ],
                1=>[
                "title" => "Banana",
                "value" => "Banana",
                "id" => "banana_id"],
                2=>[
                "title" => "Orange",
                "value" => "Orange",
                "id" => "orange_id"]
        ],
        "name" => "fruits[]",
        "div-class" => "div-text"
    ]
);

$application->includeComponent(
    'fw:select.multiple',
    'default',
    [
            "selects" => [
                 0=>[
                     "options" => [
                         0=>[
                             "title" => "Apple",
                             "value" => "Apple"],
                         1=>[
                             "title" => "Banana",
                             "value" => "Banana"],

                         2=>[
                             "title" => "Orange",
                             "value" => "Orange"]
                     ],
                     "title" => "FRUITS",
                     "name" => "fruits",
                     "class" => "input-select",
                     "div-class" => "div-select",
                     "id" => "fruits_id"
                 ],
                1=>[
                    "options" => [
                        0=>[
                            "title" => "Apple",
                            "value" => "Apple"],
                        1=>[
                            "title" => "Banana",
                            "value" => "Banana"],

                        2=>[
                            "title" => "Orange",
                            "value" => "Orange"]
                    ],
                    "title" => "FRUITS",
                    "name" => "fruits",
                    "class" => "input-select",
                    "div-class" => "div-select",
                    "id" => "fruits_id"
                ]
            ],
            "div-class" => "div-text"


    ]
);


$application->includeComponent(
    'fw:input.radio',
    'default',
    [
        "name" => "radio",
        "title" => "radio",
        "div-class" => "div-text",
        "type" =>"radio",
        "class" => "input-radio"
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


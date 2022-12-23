<?php

namespace Core;

class Page
{

    private array $properties = ["JS" => [], "CSS" => [], "STR" => []];


    public function addJs(string $src)
    {
        if(isset($this->properties['JS']) && !in_array($src,$this->properties['JS']))
            $this->properties['JS'][] ="<script src=".$src."></script>";

    }

    public  function addCss(string $link)
    {
        if(isset($this->properties['CSS']) && !in_array($link,$this->properties['CSS']))
            $this->properties['CSS'][] ="<link href=\"$link\" rel=\"stylesheet\">";
    }

    public  function addString(string $str) // добавляет в массив для хранения
    {
        if(isset($this->properties['STR']))
            $this->properties['STR'][] = $str;
    }

    public  function setProperty(string $id, $value) // добавляет для хранение значение по ключу
    {
        $this->properties[$id] = $value;
    }

    public  function getProperty(string $id) // получение по ключу
    {
        echo $this->properties[$id];
    }

    public  function showProperty(string $id)
    {
        echo "#MACROS$id#";
    }
    public  function getMacros(string $id) { // просто возвращает макрос
        return "#MACROS$id#";
    }

    public  function getAllReplace($content) // получает массив макросов и значений для замены
    {
        foreach ($this->properties as $key=>$value){
            if(is_array($value)){
                $content = str_replace($this->getMacros($key), implode($value), $content);
            }
            else
            $content = str_replace($this->getMacros($key), $value, $content);

        }
        return $content;
    }

    public  function showHead() // выводит 3 макроса замены CSS / STR / JS
    {
        $this->showProperty("JS");
        $this->showProperty("CSS");
        $this->showProperty("STR");
    }
}
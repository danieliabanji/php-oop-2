<?php

class Category
{
    public $name;

    public function __construct($_name)
    {
        $this->name = $_name;
    }

    public function printIcon()
    {
        if ($this->name === "cani") {
            $result = "./img/dog-icon.png";
        } elseif ($this->name === "gatti") {
            $result = "./img/cat-icon.png";
        }
        ;

        return $result;
    }
}
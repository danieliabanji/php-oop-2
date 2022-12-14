<?php
require_once __DIR__ . "/Products.php";
require_once __DIR__ . "/../Traits/Weightable.php";



class Food extends Products
{
    use Weightable;
    public $taste;

    public function __construct($_name, $_id, $_description, $_img, Category $_category, $_price, $_taste)
    {
        parent::__construct($_name, $_id, $_description, $_img, $_category, $_price);
        $this->taste = $_taste;
    }



    public function printTaste()
    {
        return "$this->taste";
    }
}
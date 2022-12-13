<?php
require_once __DIR__ . "/Products.php";

class Food extends Products
{
    public $weight_kg;
    public $taste;

    public function __construct($_name, $_id, $_description, $_img, Category $_category, $_price, $_weight_kg, $_taste)
    {
        parent::__construct($_name, $_id, $_description, $_img, $_category, $_price);
        $this->weight_kg = $_weight_kg;
        $this->taste = $_taste;
    }

    public function printWeight_kg()
    {
        return "$this->weight_kg";
    }

    public function printTaste()
    {
        return "$this->taste";
    }
}
<?php
require_once __DIR__ . '/Category.php';

class Products
{
    public $name;
    public $id;
    public $description;
    public $img = "";
    public $category;
    public $price;

    public function __construct($_name, $_id, $_description, $_img, Category $_category, $_price)
    {
        $this->name = $_name;
        $this->id = $_id;
        $this->description = $_description;
        $this->img = $_img;
        $this->category = $_category;
        $this->price = $_price;
    }
}
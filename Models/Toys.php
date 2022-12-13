<?php
require_once __DIR__ . "/Products.php";


class Toys extends Products
{
    public $material;

    public function __construct($_name, $_id, $_description, $_img, Category $_category, $_price, $_material)
    {
        parent::__construct($_name, $_id, $_description, $_img, $_category, $_price);
        $this->material = $_material;
    }

    public function printMaterial()
    {
        return "$this->material";
    }
}
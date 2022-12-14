<?php
require_once __DIR__ . '/../Models/Products.php';
require_once __DIR__ . '/../Models/Category.php';


$gioco1 = new Toys("Gioco per cani Corda Osso", 01, "Gioco per cani", "./img/dog-toy.webp", new Category("cani"), 4.13, "misto cotone");
$gioco2 = new Toys("Gioco per gatti a forma di topolino", 02, "Gioco per gatti", "./img/cat-toy.webp", new Category("gatti"), 30, "Pelle e sughero");
$cibo1 = new Food("Crocchette per cani con pollo", 03, "Cibo per cani", "./img/dog-food.webp", new Category("cani"), 41.90, "pollo");
$cibo2 = new Food("Crocchette per gatti con pollo", 04, "Cibo per gatti", "./img/cat-food.webp", new Category("gatti"), 39.90, "pollo");
$gioco3 = new Toys("Tiragraffi", 05, "Gioco per gatti", "./img/cat-toy-2.webp", new Category("gatti"), 30, "tessuto");
$cibo3 = new Food("Natural Trainer Gatto Sterilised Salmone", 04, "Cibo per gatti", "./img/cat-food-2.webp", new Category("gatti"), 22.99, "salmone");
$cibo4 = new Food("Monge All Breeds Adult Agnello Riso e Patate", 04, "Cibo per cani", "./img/dog-food-2.webp", new Category("cani"), 16.99, "Agnello, Riso e Patate");
$gioco4 = new Toys("KONG SqueakAir Balls", 01, "Gioco per cani", "./img/dog-toy-2.webp", new Category("cani"), 4.13, "Composto in materiale non abrasivo");

$cibo1->setWeight('12', 'kg');
$cibo2->setWeight('7', 'kg');
$cibo3->setWeight('3', 'kg');
$cibo4->setWeight('2.5', 'kg');



$products = [$gioco1, $gioco2, $gioco3, $gioco4, $cibo1, $cibo2, $cibo3, $cibo4];
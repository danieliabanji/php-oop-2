<?php
require_once __DIR__ . '/../Models/Products.php';
require_once __DIR__ . '/../Models/Category.php';

$products = [
    new Toys("Gioco per cani Corda Osso", 01, "Gioco per cani", "./img/dog-toy.webp", new Category("cani"), 4.13, "misto cotone"),
    new Toys("Gioco per gatti a forma di topolino", 02, "Gioco per gatti", "./img/cat-toy.webp", new Category("gatti"), 30, "Pelle e sughero"),
    new Food("Crocchette per cani con pollo", 03, "Cibo per cani", "./img/dog-food.webp", new Category("cani"), 41.90, 12, "pollo"),
    new Food("Crocchette per gatti con pollo", 04, "Cibo per gatti", "./img/cat-food.webp", new Category("gatti"), 39.90, 7, "pollo"),
    new Toys("Tiragraffi", 05, "Gioco per gatti", "./img/cat-toy-2.webp", new Category("gatti"), 30, "tessuto"),
    new Food("Natural Trainer Gatto Sterilised Salmone", 04, "Cibo per gatti", "./img/cat-food-2.webp", new Category("gatti"), 22.99, 3, "salmone"),
    new Food("Monge All Breeds Adult Agnello Riso e Patate", 04, "Cibo per cani", "./img/dog-food-2.webp", new Category("cani"), 16.99, 2.5, "Agnello, Riso e Patate"),
    new Toys("KONG SqueakAir Balls", 01, "Gioco per cani", "./img/dog-toy-2.webp", new Category("cani"), 4.13, "Composto in materiale non abrasivo"),



];
<?php 

require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Game.php';
require_once __DIR__ . '/Models/Comfort.php';

$categories = [
    new Category("Cane","<i class='fa-solid fa-dog'></i>"),
    new Category("Gatto", "<i class='fa-solid fa-cat'></i>")
];

// Prodotti cane

$croc_dog = new Food("./Img/croc_dog.jpg", "Oasy", $categories[0], 16.50, "Carne di maiale");
$tin_dog = new Food("./Img/tin_dog.jpg", "Monge", $categories[0], 27.20, "Carne di vitello");
$snack_dog = new Food("./Img/snack_dog.jpg", "BestBone", $categories[0], 6.90, "Carne di pollo");

$rope_dog = new Game("./Img/rope_dog.webp", "Trixie", $categories[0], 4.50, 0.3);
$ball_dog = new Game("./Img/ball_dog.jpg", "Fuxtreme", $categories[0],  5.00, 0.1);
$kong_dog = new Game("./Img/kong_dog.jpg", "Kong", $categories[0], 20.90, 0.1);

$house_dog = new Comfort("./Img/house_dog.jpg", "Cadoca", $categories[0],  129.95, "L");
$pillow_small_dog = new Comfort("./Img/pillow_small_dog.jpg",  "Trixie", $categories[0], 28.99, "S/M");
$pillow_big_dog = new Comfort("./Img/pillow_big_dog.jpg",  "Fuxtream", $categories[0], 33.99, "L/XL");

// Prodotti gatto

$croc_cat = new Food("./Img/croc_cat.jpg", "Prolife", $categories[1],  12.30, "Carne di pollo e riso");
$tin_cat = new Food("./Img/tin_cat.jpg", "Trainer", $categories[1], 17.90, "Carne di pollo e tacchino");
$snack_cat = new Food("./Img/snack_cat.jpg", "Oasy",  $categories[1], 1.30, "Salmone");

$mouse_cat = new Game("./Img/mouse_cat.jpg", "Camon", $categories[1],  2.80, 0.1);
$stick_cat = new Game("./Img/stick_cat.webp", "Camon", $categories[1],  5.90, 0.1);
$scratch_cat = new Game("./Img/scratch_cat.jpg", "DMail", $categories[1],  39.90, 3.8);

$pillow_cat = new Comfort("./Img/pillow_cat.jpg", "Vanansa", $categories[1],  19.99, "S");
$house_cat = new Comfort("./Img/house_cat.webp", "Pawhut", $categories[1],  50.95, "M");
$litter_cat = new Comfort("./Img/litter_cat.webp", "UNHO", $categories[1],  50.08, "All");


$products = [
    $croc_dog,
    $tin_dog,
    $snack_dog,
    $croc_cat,
    $tin_cat,
    $snack_cat,
    $rope_dog,
    $ball_dog,
    $kong_dog,
    $mouse_cat,
    $stick_cat,
    $scratch_cat,
    $house_dog,
    $pillow_small_dog,
    $pillow_big_dog,
    $pillow_cat,
    $house_cat,
    $litter_cat
];
<?php 

// Prodotti cane

$croc_dog = new Dog_prod("./Img/croc_dog.jpg", "Oasy", "Crocchette", 16.50, "Crocchette con carne di maiale");
$tin_dog = new Dog_prod("./Img/tin_dog.jpg", "Monge", "Cibo in scatola", 27.20, "Cibo umido con carne di vitello");
$snack_dog = new Dog_prod("./Img/snack_dog.jpg", "BestBone", "Snack", 6.90, "Biscotti snack");

$rope_dog = new Dog_prod("./Img/rope_dog.webp", "Trixie", "Gioco", 4.50, "Corda per giocare");
$ball_dog = new Dog_prod("./Img/ball_dog.jpg", "Fuxtreme", "Gioco", 5.00, "Palla da mordere");
$kong_dog = new Dog_prod("./Img/kong_dog.jpg", "Kong", "Gioco", 20.90, "Gioco da mordere");

$house_dog = new Dog_prod("./Img/house_dog.jpg", "Cadoca", "Cuccia", 129.95, "Cuccia da esterno");
$pillow_small_dog = new Dog_prod("./Img/pillow_small_dog.jpg", "JoeJoy", "Cuscino", 28.99, "Cuscino da interno per cani di taglia piccola");
$pillow_big_dog = new Dog_prod("./Img/pillow_big_dog.jpg", "Bedsure", "Cuscino", 33.99, "Cuscino da interno per cani di taglia grande");

// Prodotti gatto

$croc_cat = new Cat_prod("./Img/croc_cat.jpg", "Prolife", "Crocchette", 12.30, "Crocchette con carne di pollo e riso");
$tin_cat = new Cat_prod("./Img/tin_cat.jpg", "Trainer", "Cibo in scatola", 17.90, "Cibo umido con carne di pollo e tacchino");
$snack_cat = new Cat_prod("./Img/snack_cat.jpg", "Oasy", "Snack", 1.30, "Biscotti snack ripieni con salmone");

$mouse_cat = new Cat_prod("./Img/mouse_cat.jpg", "Camon", "Gioco", 2.80, "Topo per giocare");
$stick_cat = new Cat_prod("./Img/stick_cat.webp", "Camon", "Gioco", 5.90, "Bastoncino per giocare");
$scratch_cat = new Cat_prod("./Img/scratch_cat.jpg", "DMail", "Gioco", 39.90, "Tiragraffi a torre con cuccia");

$pillow_cat = new Cat_prod("./Img/pillow_cat.jpg", "Vanansa", "Cuscino", 19.99, "Cuscino da interno");
$house_cat = new Cat_prod("./Img/house_cat.webp", "Pawhut", "Cuccia", 50.95, "Cuccia a forma di casa da interno");
$litter_cat = new Cat_prod("./Img/litter_cat.webp", "UNHO", "Lettiera", 50.08, "Lettiera per bisogni");



$foods = [
    $croc_dog,
    $tin_dog,
    $snack_dog,
    $croc_cat,
    $tin_cat,
    $snack_cat
];

$games = [
    $rope_dog,
    $ball_dog,
    $kong_dog,
    $mouse_cat,
    $stick_cat,
    $scratch_cat
];

$comforts = [
    $house_dog,
    $pillow_small_dog,
    $pillow_big_dog,
    $pillow_cat,
    $house_cat,
    $litter_cat
];

$products = [
    $foods,
    $games,
    $comforts
];
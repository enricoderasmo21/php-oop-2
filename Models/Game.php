<?php 

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Category.php';

class Game extends Product{

    public $wheight;

    function __construct(string $image, string $brand, Category $category, float $price, float $wheight){

        parent:: __construct($image, $brand, $category, $price);

        $this->wheight = $wheight;

    }

}
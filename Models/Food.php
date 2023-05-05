<?php 

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Category.php';

class Food extends Product{

    public $ingredients;

    function __construct(string $image, string $brand, Category $category, float $price, string $ingredients){

        parent:: __construct($image, $brand, $category, $price);

        $this->ingredients = $ingredients;

    }

}
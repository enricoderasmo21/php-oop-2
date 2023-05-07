<?php 

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Category.php';
require_once __DIR__ . '/../Traits/Rateable.php';

class Food extends Product{

    use Rateable;

    public $ingredients;

    function __construct(string $image, string $brand, Category $category, float $price, string $ingredients, int $rate){

        parent:: __construct($image, $brand, $category, $price);

        $this->ingredients = $ingredients;
        $this->rate = $rate;

    }

}
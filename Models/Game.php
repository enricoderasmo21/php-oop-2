<?php 

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Category.php';
require_once __DIR__ . '/../Traits/Rateable.php';

class Game extends Product{

    use Rateable;

    public $wheight;

    function __construct(string $image, string $brand, Category $category, float $price, float $wheight, int $rate){

        parent:: __construct($image, $brand, $category, $price);

        $this->wheight = $wheight;
        $this->rate = $rate;

    }

}
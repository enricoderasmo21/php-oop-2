<?php

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Category.php';

class Comfort extends Product{
    
    public $size;
    
    function __construct(string $image, string $brand, Category $category, float $price, string $size){
    
        parent:: __construct($image, $brand, $category, $price);
    
        $this->size = $size;
    }
        

}
<?php

require_once __DIR__ . '/Category.php';

class Product {

    public $image;
    public $brand;
    public $category;
    public $price;
    
    function __construct(string $image, string $brand, Category $category, float $price){

        $this->image = $image;
        $this->brand = $brand;
        $this->category = $category;
        $this->price = $price;
    }

    function getTwoDecimals() {
        return number_format((float)$this->price, 2, '.', '');
    }
}

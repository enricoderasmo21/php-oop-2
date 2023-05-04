<?php

class Product {

    public $image;
    public $brand;
    public $type;
    public $price;
    public $description;
    
    function __construct(string $image, string $brand, string $type, float $price, string $description){

        $this->image = $image;
        $this->brand = $brand;
        $this->type = $type;
        $this->price = $price;
        $this->description = $description;
    }

    function getTwoDecimals() {
        return number_format((float)$this->price, 2, '.', '');
    }
}

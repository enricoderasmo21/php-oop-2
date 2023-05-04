<?php

class Dog_prod extends Product{

    public $category = 'Cane';

    function __construct(string $image, string $brand, string $type, float $price, string $description){

        parent:: __construct($image, $brand, $type, $price, $description);

    }

    function getIcon(){

        if($this->category == 'Cane'){

            return '<i class="fa-solid fa-dog"></i>';
        }
    }

}
<?php

class Cat_prod extends Product{

    public $category = 'Gatto';

    function __construct(string $image, string $brand, string $type, float $price, string $description){

        parent:: __construct($image, $brand, $type, $price, $description);

    }

    function getIcon(){

        if($this->category == 'Gatto'){

            return '<i class="fa-solid fa-cat"></i>';
        }
    }
    
}
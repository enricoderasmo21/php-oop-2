<?php

class Category{

    public $type;
    public $icon;

    function __construct(string $type, string $icon){

        $this->type = $type;
        $this->icon = $icon;
    }
}
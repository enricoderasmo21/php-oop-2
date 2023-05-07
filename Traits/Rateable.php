<?php

trait Rateable{

    protected $rate;

    public function getRate(){

        if ($this->rate >0 && $this->rate <=5){

            return $this-> rate;

        } else {

            throw new Exception("Attenzione, devi inserire un numero compreso tra 0 e 5!");
        }
    }
}
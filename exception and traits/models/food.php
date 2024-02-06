<?php

class food extends products{
    
    private $weight;


    public function __construct($title, $type, $description, $price, $category, $weight){

        parent:: __construct($title, $type, $description, $price, $category);
        $this -> setWeight($weight);
    }


    public function get() {

        return $this -> weight;
    }
    public function setWeight($weight) {

        $this -> weight = $weight;
    }
}
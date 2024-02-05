<?php

include __DIR__ . 'models/products.php';

class food extends products{
    
    private $weight;


    public function __construct($title, $type, $description, $price, $weight){

        $this -> setTitle($title);
        $this -> setType($type);
        $this -> setDescription($description);
        $this -> setPrice($price);
        $this -> setWeight($weight);
    }


    public function get() {

        return $this -> weight;
    }
    public function setWeight($weight) {

        $this -> weight = $weight;
    }
}
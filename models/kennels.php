<?php

include __DIR__ . 'models/products.php';

class kennels extends products{
    
    private $dimension;


    public function __construct($title, $type, $description, $price, $category, $dimension){

        parent:: __construct($title, $type, $description, $price, $category);
        $this -> setDimension($dimension);
    }





    public function get() {

        return $this -> dimension;
    }
    public function setDimension($dimension) {

        $this -> dimension = $dimension;
    }
}
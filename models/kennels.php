<?php

class kennels extends products{
    
    private $dimension;


    public function __construct($title, $type, $description, $price, $dimension){

        $this -> setTitle($title);
        $this -> setType($type);
        $this -> setDescription($description);
        $this -> setPrice($price);
        $this -> setDimension($dimension);
    }





    public function getDimension() {

        return $this -> dimension;
    }
    public function setDimension($dimension) {

        $this -> dimension = $dimension;
    }
}
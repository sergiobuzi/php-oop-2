<?php

include __DIR__ . 'models/products.php';

class games extends products{
    
    private $category;


    public function __construct($title, $type, $description, $price, $category){

        $this -> setTitle($title);
        $this -> setType($type);
        $this -> setDescription($description);
        $this -> setPrice($price);
        $this -> setCategory($category);
    }





    public function get() {

        return $this -> category;
    }
    public function setCategory($category) {

        $this -> category = $category;
    }
}
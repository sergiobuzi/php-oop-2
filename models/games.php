<?php


class games extends products{
    
    private $genre;


   public function __construct($title, $type, $description, $price, $category, $genre)
   {
        parent:: __construct($title, $type, $description, $price, $category);
        $this -> setGenre($genre);
   }





    public function get() {

        return $this -> genre;
    }
    public function setGenre($genre) {

        $this -> genre = $genre;
    }
}
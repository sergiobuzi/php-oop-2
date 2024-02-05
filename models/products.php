<?php
        class products {

            private $title;
            private $type;
            private $description;
            private $price;


            public function __construct($title, $type, $description, $price ){
                
                $this -> setTitle($title);
                $this -> setType($type);
                $this -> setDescription($description);
                $this -> setPrice($price);
            }
            


            public function getTitle() {

                return $this -> title;
            }
            public function setTitle($title) {

                $this -> title = $title;
            }




            public function getType() {

                return $this -> type;
            }
            public function setType($type) {

                $this -> type = $type;
            }




            public function getDescription() {

                return $this -> description;
            }
            public function setDescription($description) {

                $this -> description = $description;
            }




            public function getPrice() {

                return $this -> price;
            }
            public function setPrice($price) {

                $this -> price = $price;
            }






            // funzione generica
            public function get() {

                return 'NULL';
            }


        }
?>
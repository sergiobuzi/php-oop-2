<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <?php
        class products {

            private $title;
            private $type;
            private $description;
            private $price;
            private $weight;


            public function __construct($title, $type, $description, $price, $weight, ){
                
                $this -> setTitle($title);
                $this -> setType($type);
                $this -> setDescription($description);
                $this -> setPrice($price);
                $this -> setWeight($weight);
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




            public function getWeight() {

                return $this -> weight;
            }
            public function setWeight($weight) {

                $this -> weight = $weight;
            }


        }

        $cucciona = new products("cuccia grande", "cani", "grande cuccia", "123$", "20kg");
        $cuccina = new products("cuccia piccola", "gatti", "piccola cuccia", "100$", "10kg");
        var_dump($cucciona);
        echo "<br>";
        var_dump($cuccina);
    ?>
</body>
</html>
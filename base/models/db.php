<?php
    include __DIR__ . './products.php';
    include __DIR__ . './food.php';
    include __DIR__ . './games.php';
    include __DIR__ . './kennels.php';
    include __DIR__ . './category.php';


    // categorie
    $catCane = new Category('cane', 'img');
    $catGatto = new Category('gatto', 'img');
    

    // prodotti
    $prod1 = new food ("crocchette doggo", "cani", "croccolone", "70$", $catCane, "25kg");
    $prod2 = new games ("pallina", "gatti", "pallin palletta", "10$", $catGatto, "per denti");
    $prod3 = new kennels("cuccia per cani", "cani", "cucciona per cuccioloni", "123$", $catCane, "20x20");
    $prod4 = new food ("crocchette gattone", "gatto", "crocchine", "100$",$catGatto, "15kg" );
    $prod5 = new games ("pallona", "gatti", "pallin palletta", "190$", $catGatto, "per dentoni");


    $array_prod = [$prod1,$prod2,$prod3,$prod4,$prod5];

    ?>

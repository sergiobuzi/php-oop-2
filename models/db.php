<?php
    include __DIR__ . './products.php';
    echo '<br>';
    include __DIR__ . './food.php';
    echo '<br>';
    include __DIR__ . './games.php';
    echo '<br>';
    include __DIR__ . './kennels.php';


    // prodotti
    $prod1 = new food ("crocchette doggo", "cani", "croccolone", "70$", "25kg");
    $prod2 = new games ("pallina", "gatti", "pallin palletta", "10$", "per denti");
    $prod3 = new kennels("cuccia per cani", "cani", "cucciona per cuccioloni", "123$", "20x20");
    $prod4 = new food ("crocchette gattone", "gatto", "crocchine", "100$", "15kg");
    $prod5 = new games ("pallona", "gatti", "pallin palletta", "190$", "per dentoni");

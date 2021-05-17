<?php
    /*Exercice : Générer deux nombres entiers puis les afficher dans l'ordre
    croissant et dans l’ordre décroissant*/
    $a=rand(-20,20);
    $b=rand(-20,20);
    echo "a={$a}, b={$b} <br>";
    if ($a<=$b){
        echo "Ordre croissant : {$a}, {$b} <br>";
        echo "Ordre decroissant : {$b}, {$a} <br>";
    }else{
        echo "Ordre croissant : {$b}, {$a} <br>";
        echo "Ordre decroissant : {$a}, {$b} <br>";
    }
?>
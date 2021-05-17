<?php
    /*Exercice : soit l'équation ax+b=0,générer la valeur de a et de b
    puis donner les solutions de l'équation ci dessus.*/
    $a=rand(-20,20);
    $b=rand(-20,20);
    $x=-$b/$a;
    echo "a= {$a}, b= {$b} <br>";
    echo "x= {$x}";
?>
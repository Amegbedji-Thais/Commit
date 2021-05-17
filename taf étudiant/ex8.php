<?php
    /*Exercice 3:
    Écrire un script qui permet de générer un tableau N de mots. 
    Chaque mot ne devrait contenir que 20 caractères. Le script 
    affiche tous les mots du tableau puis détermine et affiche ;
    ● le mot le plus long et le mot le plus court
    ● le nombre de mots contenant la lettre « M » (la casse n’est 
    pas tenue en compte).
    ● le mot qui a le plus de voyelles
    ● le mot qui a moins de consonne*/
    
    $N=[
        "jour1"=>"Lundi",
        "jour2"=>"Mardi",
        "jour3"=>"Mercredi",
        "jour4"=>"Jeudi",
        "jour5"=>"Vendredi"
    ];
    foreach ($N as $key => $value) {
        echo "{$key} : {$value} <br>";
    }
    $str = "{$N['jour1']}";
    echo strlen($str); echo "<br>" ;
    $str = "{$N['jour2']}";
    echo strlen($str); echo "<br>";
    $str = "{$N['jour3']}";
    echo strlen($str); echo "<br>";
    $str = "{$N['jour4']}";
    echo strlen($str); echo "<br>" ;
    $str = "{$N['jour5']} <br>";
    echo strlen($str); echo "<br>";
?>

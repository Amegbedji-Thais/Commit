<?php
    /*Exercice III : Point: Générer deux points puis calculer et afficher la
    distance entre les deux points.Un point est caractérisé par son abscisse et
    son Ordonnée.*/
    $x1=rand(-20,20);
    $y1=rand(-20,20);
    $x2=rand(-20,20);
    $y2=rand(-20,20);
    $distance=sqrt(pow($x2-$x1,2)+pow($y2-$y1,2));
    echo "les coordonnées de a sont a({$x1},{$y1}) <br>";
    echo "les coordonnées de b sont b({$x2},{$y2}) <br>";
    echo "la distance entre a et b est : {$distance}";
?>

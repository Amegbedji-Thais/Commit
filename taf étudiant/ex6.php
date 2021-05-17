<?php
    /*Exercice : soit l'équation ax2+bx+c=0,générer la valeur de a , 
    de b et de c puis donner les solution de l'équation ci dessus. */
    $a=rand(-20,20);
    $b=rand(-20,20);
    $c=rand(-20,20);
    $delta=($b*$b)-4*$a*$c;
    $x0=(-$b/2*$a);
    $x1=(-$b-sqrt($delta))/(2*$a);
    $x2=(-$b+sqrt($delta))/(2*$a);
    echo "a= {$a}, b= {$b}, c= {$c} <br>";
    echo "delta= {$delta} <br>";
    if($delta>0){
        echo "le discriminant étant positif il existe deux solutions telles que : <br> x1= {$x1} <br> x2= {$x2} <br>";
    }elseif($delta=0){
        echo "le discriminant étant nul il existe une solution unique telle que : <br> x0= {$x0} <br>";
    }else{
        echo "le discriminant étant négatif il n'y a pas de solutions";
    }
?>

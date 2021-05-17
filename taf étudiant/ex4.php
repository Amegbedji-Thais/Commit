<?php
    $a=rand(-20,20);
    $b=rand(-20,20);
    $c=rand(-20,20);
    $e=null;
    echo "les nombres générés sont a= {$a}, b= {$b}, c= {$c} <br>";
    do
    {
        if($a>$b)
        {
            $e=$a;
            $a=$b;
            $b=$e;
        }
        else if($b>$c)
        {
            $e=$b;
            $b=$c;
            $c=$e;
        }
    }while(!(($a<$b)&&($a<$c)&&($b<$c)));
     
    echo "l'ordre croissant est : {$a}, {$b}, {$c} <br>";
    echo "l'ordre décroissant est : {$c}, {$b}, {$a} <br>";
?>

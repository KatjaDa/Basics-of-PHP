<?php

$n = $_GET["lukusarja"];

function lukusarjansumma($n)
{
    $sum = 0;
    for ($i = 1 ; $i <= $n ; $i++)
        for ($j = 1 ; $j <= $i ; $j++)
            $sum += $j;
    return $sum;
}
 
echo(lukusarjansumma($n));

?>
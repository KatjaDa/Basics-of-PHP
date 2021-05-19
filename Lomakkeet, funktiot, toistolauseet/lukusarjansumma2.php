<?php
$n = $_GET["lukusarja"];

function lukusarjanSumma($n){
    $summa = 0;
    for ($i = 1; $i <= $n; $i++){
      $summa = $summa + $i;
    }
    echo $summa;
}
  
lukusarjanSumma($n);
?>
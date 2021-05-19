<?php

$numero = $_GET["kertoma"];

function kertoma($numero){
    $kertoma = 1;
    for ($i = 1; $i <= $numero; $i++){
      $kertoma = $kertoma * $i;
    }
    echo $kertoma;
}
  
kertoma($numero);
?>
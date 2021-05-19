<!DOCTYPE html>
<html>
  <head>
    <title>Tehtavat osa 2, funktio</title>
  </head>
  <body>
      <?php


function tulostaViesti() {
   echo "Moikka kaikille!";
}

tulostaViesti();

         function kerroNumerot($num1, $num2) {
            $sum = $num1 * $num2;
            echo "<br> Parametri 1: ".$num1." Parametri 2: ".$num2."<br>";
            echo "Numeroiden tulos on : $sum";
         }
         
         kerroNumerot(10, 20);
      ?>
      
   </body>
</html>
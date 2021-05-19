<!DOCTYPE html>
<html>
  <head>
    <title>Tehtavat osa 2</title>
  </head>
  <body>

<?php
///tehtava
$ostoslista = array("kana", "liha", "banaani", "omena", "kiiwi", "appelsiini");
?>

<?php
///tehtava3
$ostoslista = array("kana", "liha", "banaani", "omena", "kiiwi", "appelsiini");
    echo $ostoslista[0]."<br>";
    echo $ostoslista[2]."<br>";
    echo "<br>";
?>
<?php
///tehtava4
$ostoslista = array("kana", "liha", "banaani", "omena", "kiiwi", "appelsiini");
foreach ($ostoslista as $i) {
    echo "<p>$i</p>";
  }
?>

<?php
//Tehtava 5
header("Content-Type: text/html; charset=UTF-8");
$sanakirja = [
    "Maanantai"=>"Monday", "Tiistai"=>"Tuesday", "Keskiviikko"=>"Wednesday", "Torstai"=>"Thursday"
];
print_r($sanakirja);
echo "<p></p>";
?>

<?php
//tehtava 6
header("Content-Type: text/html; charset=UTF-8");
$sanakirja = [
    "Maanantai"=>"Monday", "Tiistai"=>"Tuesday", "Keskiviikko"=>"Wednesday", "Torstai"=>"Thursday"
];
foreach ($sanakirja as $i => $val) {
    echo "$i on englanniksi: $val <br>";
  }
?>

<?php
//tehtava 8
header("Content-Type: text/html; charset=UTF-8");
$sanakirja = [
   "A" => [ 
        "acorn" => "terho", "avert"=> "ehkäistä", "azure"=>"taivaansininen"
        ],
    "B" => [
        "back" => "takaisin", "black" => "musta", "balloon" => "ilmapallo"
    ]
];
$keys =array_keys($sanakirja);
for($i = 0; $i < count($sanakirja); $i++) {
    echo $keys[$i] . "<br>";
foreach($sanakirja[$keys[$i]] as $key => $value) {
    echo $key . " on suomeksi " . $value . "<br>";
}
echo "<br>";
}
?>

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
 

         function summa(int $luku1, int $luku2) {
           return $luku1 + $luku2;
         }
         echo summa(15, 2);

  ?>
</body>
</html>
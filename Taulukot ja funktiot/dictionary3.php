<!DOCTYPE html>
<html>
<body>

<?php

header("Content-Type: text/html; charset=UTF-8");
$sanakirja = [
    "Maanantai"=>"Monday", "Tiistai"=>"Tuesday", "Keskiviikko"=>"Wednesday", "Torstai"=>"Thursday"
];
foreach ($sanakirja as $i => $val) {
    echo "$i on englanniksi: $val <br>";
  }
?>
</body>
</html>
<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  
<?php
$luku1 = $_GET["lukueka"];
$luku2 = $_GET["lukutoka"];

if ($luku1 < $luku2 ) {
    echo "<p>".$luku1." on pienempi kuin ".$luku2."</p>";
} else if ($luku1 <= $luku2 ) {
    echo "<p>".$luku1." on pienempi tai sama kuin ".$luku2."</p>";
} else if ($luku1 > $luku2 ) {
    echo "<p>".$luku1." on suurempi kuin ".$luku2."</p>";
} else {
    echo "<p>".$luku1." on suurempi tai yhtäsuuri kuin ".$luku2."</p>";
}

?>
</body>
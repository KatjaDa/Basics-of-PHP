<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  
<?php
$luku = $_GET["tahti"];

function tulostaTahtia($luku) {
    for ($i= 1; $i <= $luku;) {
        echo "*";
        $i++; }
}
tulostaTahtia($luku);
?>
</body>
</html>
<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  
<?php
$etunimi = $_GET["etunimi"];

if ($etunimi === 'Sandra') {
    echo "Tervehdys, ystava!";

}else if ($etunimi === 'IDDQD') {
        echo "God mode enabled.";


} else {
    echo "Kuka oikein olet?";

}


?>

</body>
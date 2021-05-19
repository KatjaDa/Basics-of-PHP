<?php

$koko = $_GET["kolmio"];
function tulostaKolmio($koko) {
    
}
for($i=1; $i<=$koko; $i++) {
for($j=1; $j<=$i; $j++)
{
echo '*';
}
echo '<br>';
}
tulostaKolmio($koko);
?>
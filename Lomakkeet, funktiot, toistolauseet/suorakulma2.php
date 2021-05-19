<?php
$leveys = $_GET["leveys"];
$korkeus = $_GET["korkeus"];

function tulostaNelio($leveys, $korkeus) {
    for($i=0; $i<$korkeus; $i++) {
        for($j=0; $j<$leveys; $j++)
        {
        echo '*';
        }
        echo '<br>';
        }  
}
tulostaNelio($leveys,$korkeus);
?>
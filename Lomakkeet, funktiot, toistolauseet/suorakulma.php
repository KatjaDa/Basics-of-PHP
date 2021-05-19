<?php
$luku = $_GET["tahti"];

function tulostaTahtia($luku) {
    for ($i= 1; $i <= $luku;) {
        echo "*";
        $i++; }
}
tulostaTahtia($luku);

$sivunpituus = $_GET["suorakulma"];
function tulostaNelio($sivunpituus) {
    for($i=0; $i<$sivunpituus; $i++) {
        tulostaTahtia($sivunpituus);
        echo '<br>';
        }
        }  

tulostaNelio($sivunpituus);

$leveys = $_GET["leveys"];
$korkeus = $_GET["korkeus"];
function tulostaSuorakulma($leveys, $korkeus) {
    for($i=0; $i<$korkeus; $i++) {
        tulostaTahtia($leveys);
        echo '<br>';
        }
        }  

tulostaSuorakulma($leveys, $korkeus);

$koko = $_GET["kolmio"];
function tulostaKolmio($koko) {
for($i=1; $i<=$koko; $i++) {
    tulostaTahtia($i);
    echo '<br>';
}
}
tulostaKolmio($koko);

?>
### Tehtavat osa 4
Tein tehtävät yksin.
Toimivat vastaukset kaikkiin tehtäviin löytyy täältä:
https://public.bc.fi/s2000036/phptehtavat/tehtavat4/index

Sivut on yhdessä index.html tiedostossa, ettei dokumentista tule liian pitkä, niin huomiona, että HTML koodit ovat blokin sisässä:

```html
<!DOCTYPE html>
<html>
  <head>
    <title>Tehtavat osa 4</title>
  </head>
  <! -- Tässä välissä on  <form> </form> -->
  <body>
</body>
<html>
```
#### Tee funktio, joka tulostaa kokonaisluvut 1:stä parametrina annettuun lukuun asti.
HTML FORM
```html
<form action="luvut1.php" method="get">
Mihin asti luetellaan numeroita? <input type="number" name="luku"> <br>
<input type="submit" value="Laheta">
</form>
```
PHP koodi
```php
<?php
$luku = $_GET["luku"];

for ($i= 0; $i <= $luku; $i++) {
    echo $i."<br>"; }
?>
```

#### Tee funktio, joka tulostaa kokonaisluvut parametrina annetusta luvusta toiseen parametrina annettuun lukuun asti.
```html
<form action="luvut.php" method="get">
      Mista asti luetellaan numeroita? <input type="number" name="lukueka"> <br>
      Mihin asti luetellaan numeroita? <input type="number" name="lukutoka"> <br>
      <input type="submit" value="Laheta">
    </form>
```
```php
<?php
$luku1 = $_GET["lukueka"];
$luku2 = $_GET["lukutoka"];

for ($i= $luku1; $i <= $luku2; $i++) {
    echo $i."<br>"; }
?>
```
#### Tee funktio, tulostaTahtia, joka tulostaa annetun määrän tähtiä ja rivinvaihdon.
#### Tee funktio tulostaNelio($sivunpituus) joka tulostaa neliön käyttäen tulostaTahtia-funktiota.
#### Tee funktio tulostaSuorakulmio($leveys, $korkeus) joka tulostaa suorakulmion käyttäen tulostaTahtia-funktiota.
#### Tee funktio tulostaKolmio($koko) joka tulostaa kolmion käyttäen tulostaTahtia-funktiota.

```html
<form action="suorakulma.php" method="get">
Montako tahtea tulostetaan? <input type="number" name="tahti"> <br>
<input type="submit" value="Laheta">
</form>

<form action="suorakulma.php" method="get">
Kuinka suuri nelio tulostetaan? <input type="number" name="suorakulma"> <br>
<input type="submit" value="Laheta">
</form>

<p>"Kuinka suuri suorakaide tulostetaan?"</p>
<form action="suorakulma.php" method="get">
Leveys? <input type="number" name="leveys"> <br>
Korkeus? <input type="number" name="korkeus"> <br>
<input type="submit" value="Laheta">
</form>

<form action="suorakulma.php" method="get">
Kuinka korkea kolmio? <input type="number" name="kolmio"> <br>
<input type="submit" value="Laheta">
</form>
```
```php
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
```

#### Tee funktio, joka palauttaa summan 1+2+3+...+n, missä n on parametrina annettu luku.
```html
<form action="lukusarjansumma2.php" method="get">
Lukusarjan summa luvulle <input type="number" name="lukusarja"> <br>
<input type="submit" value="Laheta">
</form>
```

```php
<?php
$n = $_GET["lukusarja"];

function lukusarjanSumma($n){
    $summa = 0;
    for ($i = 1; $i <= $n; $i++){
      $summa = $summa + $i;
    }
    echo $summa;
}
  
lukusarjanSumma($n);

?>
```
#### Tee funktio, joka palauttaa kertoman
```html
<form action="kertoma.php" method="get">
Lukusarjan kertoma luvulle <input type="number" name="kertoma"> <br>
<input type="submit" value="Laheta">
</form>
```
```php
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
```

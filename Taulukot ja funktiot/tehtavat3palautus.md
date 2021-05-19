### Tehtävät osa 3
Ohessa kaikkiin tehtäviin palautukset. Olen koonnut kaikki tehtävät tästä 3 osuudesta sivulle:
https://public.bc.fi/s2000036/phptehtavat/tehtavat3/index
Paitsi kertotaulu omanaan nähtävästi, se löytyy täältä: https://public.bc.fi/s2000036/phptehtavat/tehtavat3/kertotaulu

#### 1.Kirjoita muutaman lauseen mittainen selvitys PHP:n vakiofunktion print_r toiminnasta
On PHP:hen rakennettu funktio, jolla voidaan printata tai näyttää tieto, mitä on tallennettu muuttujaan
#### 2: Laadi oma PHP-sovellus nimeltä array.php, jossa on taulukko nimeltä ostoslista ja ostoslistassa vähintään viisi eri tuotetta, mitä kaupasta saattaisi ostaa.
```php
<?php
$ostoslista = array("kana", "liha", "banaani", "omena", "kiiwi", "appelsiini");
?>
```

#### 3. Selvitä, miten voit tulostaa jotain tiettyä järjestyslukua vastaavan arvon (engl. value). Tee uusi versio edellisen tehtävän array.php:sta nimeltä array2.php, missä tulostat echon avulla muutaman arvon sivulle.
```php
<?php
$ostoslista = array("kana", "liha", "banaani", "omena", "kiiwi", "appelsiini");
    echo $ostoslista[0] . "\n".$ostoslista[2]."\n";
?>
```

#### 4. Selvitä, miten PHP:n foreach-lause toimii. Mikä on foreach-lauseen syntaksi? Tee PHP-sovellus nimeltä foreach, jossa luot vähintään viiden eri tuotteen ostoslistan ja tulostat niiden kaikkien arvot näkyviin. 
foreach on helppo tapa iteroida läpi taulukon. foreach toimii vain arrayn(taulukko) ja objektien kautta (lähde php manual) ja antaa sen kanssa pitää käyttää aina muuttujaa joka on esitelty (initialized). Lähde: https://www.php.net/manual/en/control-structures.foreach.php

foreach (iterable_expression as $value)
    statement


```php

<?php
$ostoslista = array("kana", "liha", "banaani", "omena", "kiiwi", "appelsiini");
foreach ($ostoslista as $i) {
    echo "$i \n";
  }
?>
```
#### 5. Järjestysluvun sijaan PHP:ssä voidaan asettaa nimi (engl. key).
Sen voi asettaa laittamalla nimi, ja sen jälkeen arvo, eli näin:
```php
foreach (iterable_expression as $key => $value)
    statement
```
Tehtävä: Laadi oma php-sovellus dictionary.php, jossa on taulukko nimeltä translations ja sen sisältönä suomenkielisiä sanoja ja niiden englanninkielisiä käännöksiä.

```php
<?php

header("Content-Type: text/html; charset=UTF-8");
$sanakirja = [
    "Maanantai"=>"Monday", "Tiistai"=>"Tuesday", "Keskiviikko"=>"Wednesday", "Torstai"=>"Thursday"
];
print_r($sanakirja);

?>
```
#### 6. Laadi foreach-lauseen avulla uusi versio dictionary3.php, jossa näytät sivulla suomenkieliset sanat ja niiden englanninkieliset käännökset.

```html
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
```

#### Tehtävä: laadi PHP-sovellus dictionary_v2.php, jossa luot taulukon, jonka sisällä on kirjaimia, jonka arvona on taulukko, jossa on englanninkielisiä sanoja, jotka alkavat samalla kirjaimella ja niiden suomenkieliset käännökset.
```php
<?php

$sanakirja = [
   "A" => [ 
        "acorn" => "terho", "avert"=> "ehkäistä", "azure"=>"taivaansininen"
        ],
    "B" => [
        "back" => "takaisin", "black" => "musta", "balloon" => "ilmapallo"
    ]
];

?>
```

#### 8. Laadi edellisen tehtävän pohjalta PHP-sovellus dictionary_v2_2.php, jossa tulostat kahden sisäkkäisen foreach-lauseen avulla ruudulle kirjaimet sekä sanat englanniksi ja suomeksi.

```php
<?php
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
```

#### 9. Selvitä, mitä funktio (engl. function) tarkoittaa PHP:ssä. Mikä on funktion syntaksi? Tee esimerkki, jossa esität jonkin yksinkertaisen PHP-funktion toimintaa.
Ohessa funktion syntaksi, eli
```php
function funktionNimi() {
 //...koodia jota funktio tekee
}
/// ja kutsutaan funktio
funktionNimi();
 ```
Ja tässä yksinkertainen funktio
```php
      <?php
         function tulostaViesti() {
            echo "Moikka kaikille!";
         }
         
         tulostaViesti();
      ?>
 ```
#### 10. Selvitä, mitä funktion parametri (engl. argument) tarkoittaa. Mikä on parametrillisen funktion syntaksi? Tee esimerkki, jossa esität jonkin yksinkertaisen parametrillisen PHP-funktion toimintaa.
Parametrillisessa funktiossa funktiolle asetaan muuttujat parametreiksi. Näin funktiota voidaan kutsua esim. useasti, käyttämällä samaa funktiota, muttei tarvitse kirjoittaa koko koodia uusiksi.

```php
      <?php
         function kerroNumerot($num1, $num2) {
            $sum = $num1 * $num2;
            echo "<br> Parametri 1: ".$num1." Parametri 2: ".$num2."<br>";
            echo "Numeroiden tulos on : $sum";
         }
         
         kerroNumerot(10, 20);
      ?>
```

#### 11. Selvitä, mitä tarkoitetaan funktion palautusarvolla (engl. return value). Mikä on syntaksi parametrilliselle funktiolle, joka palauttaa jonkin arvon? Tee esimerkki, jossa esität tällaisen funktion toimintaa.
Palautusarvo on arvo, jonka funktio palauttaa kun funktion kun sitä kutsutaan ja koodi on toteutunut.

```php
         function summa(int $luku1, int $luku2) {
           return $luku1 + $luku2;
         }
         echo summa(15, 2);
 ```
#### 12. Luo PHP-ohjelma kertotaulut.php, jossa luot erilaisia kertotauluja viisi kappaletta.
Muokkaus, tässä on funkiona kertotaulu, joka tekee 1-> siihen asti kun funktiolle annettu parametriksi:
https://public.bc.fi/s2000036/phptehtavat/tehtavat3/kertotaulu

Lisäksi, tein kertotaulu 2 php johon annetaan molemmat luvut (mistä ja mihin asti)
https://public.bc.fi/s2000036/phptehtavat/tehtavat3/kertotaulu2

```php
<?php

function kertotaulu($kertaa) {
	echo "<table border =\"1\" style='border-collapse: collapse'>";
	for ($rivi=1; $rivi <= $kertaa; $rivi++) { 
		echo "<tr> \n";
		for ($sarake=1; $sarake <= 10; $sarake++) { 
		   $i = $sarake * $rivi;
		   echo "<td>$i</td> \n";
		   	}
	  	    echo "</tr>";
		}
		echo "</table>";
		echo "<br>";
}
kertotaulu(5);
kertotaulu(7);
kertotaulu(10);
kertotaulu(18);
kertotaulu(20);
?>
```

```php
<?php

function kertotaulu($mista, $mihin) {
	echo "<table border =\"1\" style='border-collapse: collapse'>";
	for ($rivi=$mista; $rivi <= $mihin; $rivi++) { 
		echo "<tr> \n";
		for ($sarake=1; $sarake <= 10; $sarake++) { 
		   $i = $sarake * $rivi;
		   echo "<td>$i</td> \n";
		   	}
	  	    echo "</tr>";
		}
		echo "</table>";
		echo "<br>";
}
kertotaulu(5,7);
kertotaulu(4,8);
kertotaulu(10,11);
kertotaulu(15,20);
kertota
```

#### 13. Funktioita on käytössä jokaisessa ohjelmointikielessä (vaikka Java-kielessä funktioita sanotaankin metodeiksi). Selvitä, mitä hyötyä funktioiden käytöstä on koodissa? 
Funktiot ovat käteviä. Kaikissa kielissä on sisäänrakennettuja funtioita, jotka nopeuttavat koodaamista, ja niitä voi helpommin hyöytykäyttää useassa kohtaa, esim. juuri parametrilliset funktiot. Lisäksi monimutkaisemmat funktiot voi rakentaa omaksi ohjelmakseen ja exportata pääohjelman käyttöön, jolloin koodi pysyy luettavampana, ja helpommin päivitettävänä.
### Tehtävät osa 2 palautus
Tein tehtävät yksin. Osaa muokattavasti, en tajunnut että olisi pitänyt olla alkuperäinenkin, joten osassa tehtävistä on valitettavasti vaan viimeinen versio...

#### 1. Luo html-sivu, joka pitää sisällään seuraavat lomakkeet:
#### 2. Selvitä, miten if-ehtolauseen rakenne PHP:ssa. Tee PHP-sovellus if1.php, jossa tulostat ruudulle tekstin Tervehdys, ystävä!, jos syötetty nimi on Sandra ja muussa tapauksessa tekstin Kuka oikein olet? Yhdistä if1 html-sivusi ensimmäiseen lomakkeeseen.
#### 3. Miten if-else-rakenne toimii PHP:ssä? Muokkaa edellisessä tehtävässä laadittua sovellusta niin, että jos syötetty ei ole Sandra vaan IDDQD, tulostat ruudulle God mode enabled.
Sivu löytyy: https://public.bc.fi/s2000036/phptehtavat/tehtavat2/if3.php

```html
<!DOCTYPE html>
<html>
  <head>
    <title>Tehtavat osa 2</title>
  </head>
  <body>
<form action="kasittely.php" method="get">
Nimi: <input type="text" name="etunimi"> <br>
<input type="submit" value="Laheta">
</form>

<form action="luvut.php" method="get">
      Eka luku <input type="number" name="lukueka"> <br>
      Toka luku <input type="number" name="lukutoka"> <br>
      <input type="submit" value="Laheta Luvut">
    </form>
  </body>
  </html>
```
```php
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
```

#### Miten erilaisia lukuarvoihin kohdistuvia ehtoja laaditaan PHP:ssä? Tee php-sovellus if2.php, johon laadit esimerkit kaikista alla olevista ehdoista. Yhdistä if2.php ensimmäisen tehtävän lomakkeeseen.

```html
<form action="luvut.php" method="get">
      Eka luku <input type="number" name="lukueka"> <br>
      Toka luku <input type="number" name="lukutoka"> <br>
      <input type="submit" value="Laheta Luvut">
    </form>
```
```php
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
```

#### 6. Miten PHP:ssä voidaan yhdistää eri ehtoja? Tee PHP-sovellus nimeltä if3.php, jossa tulostetaan ruudulle Tervetuloa Ritva!, jos käyttäjätunnus on Ritva ja salasana on salasana. Muussa tapauksessa tulostetaan ruudulle teksti Sinulla ei ole asiaa tänne!. Yhdistä if3.php ensimmäisessä tehtävässä laadittuun lomakkeeseen. Samassa myös tehtävä 7.
Olin tehnyt tämän vähän eri tavalla, joten sivulta löytyy linkki tähän kirjautumiseen. Tein tätä tehtävää pisimpään kaikista php tehtävistä (+2h) kun luin tämän ekaksi vähän väärin, joten en halunnut pyyhkiä tätä pois. Kaivelin tätä aika paljon ja jouduin googlaamaankin kovasti että sain toimimaan.

https://public.bc.fi/s2000036/phptehtavat/tehtavat2/kirjautuminen/login.php

login.php tiedosto:
```php
<?php session_start();/* Avaa session */
/* Tarkista että loma on lähetetty*/if(isset($_POST['Submit'])){
/* Määritellään käyttäjätunnus ja salasana */$logins = array('Ritva' => 'salasana');


/* tarkistetaan ja lisätään käyttäjä ja salasana muuttujiin */$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
$Password = isset($_POST['Password']) ? $_POST['Password'] : '';

/* Tarkistetaan onko käyttäjätunnus tai salasana (tehtävän mukaisesti jompi kumpi pitää täsmätä) */
if (isset($logins[$Username]) || $logins[$Password]){
$_SESSION['UserData']['Username']=$logins[$Username];
header("location:index.php");
exit;

} else {
/*Lähetä error viesti */$msg="<span style='color:red'>Sinulla ei ole asiaa tanne!</span>";
}
}
?>

<form action="" method="post" name="Login_Form">
  <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
    <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    <tr>
      <td colspan="2" align="left" valign="top"><h3>Kirjaudu</h3></td>
    </tr>
    <tr>
      <td align="right" valign="top">Kayttajatunnus</td>
      <td><input name="Username" type="text" class="Input"></td>
    </tr>
    <tr>
      <td align="right">Salasana</td>
      <td><input name="Password" type="password" class="Input"></td>
    </tr>
    <tr>
      <td> </td>
      <td><input name="Submit" type="submit" value="Kirjaudu" class="Button3"></td>
    </tr>

  </table>
</form>
```
index.php
```php
<?php session_start(); /* avaa yhteyden */
include 'styles.css';
if(!isset($_SESSION['UserData']['Username'])){
header("location:login.php");
exit;
}
?>

Kirjautuminen onnistui! <a href="logout.php">Paina kirjautuaksesi ulos</a> 
```
logout.php

```php
<?php session_start(); /* avaa sessio */session_destroy(); /* lopeta sessio*/header("location:login.php"); 
exit;
?>
```

#### 8. Mitä tarkoittaa kun ehtorakenteessa on kolme yhtäkuin-merkkiä peräkkäin (eli ===)?
== tarkoittaa yhtäsuuri, === tarkoittaa identtinen, jolloin operaattorilla pitää olla sama tyyppi ja arvo.

#### 9. Mitä tarkoitetaan syötteen validoinnilla?
Syöte validoidaan eli tarkistetaan syötetyn tiedon oikeellisuus.

#### 10. Miten PHP:n vakiofunktio empty() toimii? Lisää if1.php-sovellukseen muutos, joka ilmoittaa käyttäjälle, jos nimikenttä on jätetty tyhjäksi.
```php
<?php
$etunimi = $_GET["etunimi"];
if (empty($etunimi)) {
  echo "Nimikenttä on tyhjä.<br>";
}
?>
```

 

#### 12. Mitä eroa on funktioilla empty() ja isset()? Kumpaa funktiota kannattaa opetella käyttämään tiedon validoimiseen ja miksi?
The empty() function checks whether a variable is empty or not.
empty () tarkistaa onko muuttuja tyhjä vai ei
isset() tarkistaa onko muuttuja, tyhjä JA "alustettu" (declared) ja ettei sen arvo ole NULL

isset on parempi eheyden kannalta.


#### 14. Switch-ehtorakenteella voidaan korvata if-else-if-rakenne. Asiayhteydestä riippuu milloin kannattaa käyttää mitäkin ehtorakennetta. Koodin luettavuuden ja ylläpidettävyyden kannalta jompi kumpi vaihtoehdoista on yleensä parempi kuin toinen.
Tehtävä: etsi jokin tilanne, jolloin switch-ehtorakenne on parempi kuin if-else ja laadi PHP-sovellus switch.php, jossa demonstroit tätä ehtorakennetta.

```php
<?php
/// tässä esimerkki kirjautumisen jälkeisen viestin valintaan käyttäjäroolin mukaan
$role = 'oppilas';
$message = '';

switch ($role) {
	case 'opettaja':
		$message = 'Heippa Opettaja! Haluatko julkaista uusia tehtavia?';
		break;
	case 'oppilas':
		$message = 'Hei Oppilas! Kiva kirjauduit, muista katsoa viestisi';
		break;
	case 'vanhempi':
		$message = 'Tervetuloa! Loydat oppilaan poissaolot wilmasta';
		break;
	default:
		$message = 'Et ole kirjautunut!';

}

echo $message;
?>
```

#### 15. Tutki alla olevaa doubleswitch.php-esimerkkiä ja päättele mitä alemman switch-rakenteen kohdalla tulostetaan ruudulle. Minkä virheen pahaa-aavistamaton koodaaja on tässä tehnyt?
Ensimmäisessä osiossa on käytetty break; ja toisessa ei, joten ensimmäisestä switchista tulostetaan vain case 1, mutta seuraavasti 1 ja myös sen jälkeen tulevat, eli case 2 ja 3.

#### 16. Selvitä, mitä muuttujan i arvolle tapahtuu, kun suoritetaan:
a) $i++;
i:hin lisätään yksi, eli i+1

b) $i--;
i:stä miinustetaan yksi, eli i-1

c) $i += 5;
i lisätään 5 ja siitä tulee i uusi arvo eli i = i+5

d) $i -= 5;
i vähennetään 5 ja siitä tulee i uusi arvo eli i = i -5

#### 17. Tarkastele alla olevassa kuvassa olevan demon toimintaa. Tee oma versio PHP-sovelluksesta for, jossa sivulle tulostettavat luvut ovat yhdestä kymmeneen.
https://public.bc.fi/s2000036/phptehtavat/tehtavat2/for

```php
<?php
for ($i = 1; $i <= 10; $i++){
    echo "<p>$i</p>";
}
?>
```
#### 18. Selvitä, mikä on for-lauseen syntaksi.

for (alustus, ehto, inkremointi) {
  tänne tulee koodi jota toteutetaan ja joka kierrokselle mene takaisin ehdon tarkistukseen ennen toteutusta
}

#### 19. Laadi PHP-sovellus moroporo.php, joka tulostaa sivulle tekstin Moro poro! 120 kertaa.
https://public.bc.fi/s2000036/phptehtavat/tehtavat2/moroporo

```php
<?php 
$i = 0;
while ($i < 120 ) {
    echo "Moro poro! ";
    $i++;
}
?>
```
 
#### 20. Laadi PHP-sovellus countdown.php, joka tulostaa sivulle luvut alkaen 10 päättyen 0:aan.
https://public.bc.fi/s2000036/phptehtavat/tehtavat2/countdown

```php
<?php 
$i = 10;
while ($i >= 0 ) {
    echo $i."\n";
    $i--;
}
?>
```

#### 21. Laadi PHP-sovellus even.php, joka tulostaa sivulle kaikki 0 ja 100 välissä olevat parilliset luvut.
https://public.bc.fi/s2000036/phptehtavat/tehtavat2/even
```php
<?php 
$i = 0;
while ($i <= 100) {
    $i++;
    if ($i%2 == 0) {
        echo $i."\n";
    }

}
?>
```
#### 23. For-lauseen sisään voi laittaa toisen for-lauseen. Tutki alla olevan esimerkin toimintaa ja laadi oma sovellus nimeltä multiplicationtable.php, jossa esitetään 10 x 10 -kertotaulu.

https://public.bc.fi/s2000036/phptehtavat/tehtavat2/multiplicationtable

```php
<?php
echo "<table border =\"1\" style='border-collapse: collapse'>";
	for ($rivi=1; $rivi <= 10; $rivi++) { 
		echo "<tr> \n";
		for ($sarake=1; $sarake <= 10; $sarake++) { 
		   $i = $sarake * $rivi;
		   echo "<td>$i</td> \n";
		   	}
	  	    echo "</tr>";
		}
		echo "</table>";
?>
```

#### 24. Etsi, kuka on keksinyt seuraavan jokaisen ohjelmoijan nyrkkisäännön: "Two or more, use a for". Miksi tämä sääntö on tärkeä muistaa?
Edsger Wybe Dijkstra. Jottei turhaan kopioi samaa koodia, vaan enemmin käyttää for loopia läpikäyntiin.

#### 25. Selvitä While-lauseen syntaksi ja tee PHP-sovellus while.php, joka tulostaa sivulle kokonaisluvut alkaen nollasta ja päätyen kymmeneen. Onko tässä tapauksessa mielestäsi järkevämpää käyttää For-lausetta vai While-lausetta?

https://public.bc.fi/s2000036/phptehtavat/tehtavat2/while

```php
<?php 
$i = 10;
while ($i >= 0 ) {
    if ($i%2==0){
        echo $i."\n";
    }
    $i--;
}
?>
```

#### 26. Tutki alla olevaa esimerkkiä toistolauseen While toiminnasta. Laadi ohjelma, joka tulostaa samat tiedot sivulle for-lauseen avulla. Onko tässä tapauksessa mielestäsi järkevämpää käyttää For-lausetta vai While-lausetta?
On järkevämpää käyttää mielestäni for lausetta.

```php
<?php 

for ($i=1; $i<1100000; $i=$i*2) {
    echo "$i ";
}
?>
```
#### 27. Laadi PHP-sovellus, joka arpoo nopan silmäluvun niin pitkään, kunnes tulee luku 1.

https://public.bc.fi/s2000036/phptehtavat/tehtavat2/noppa

```html
<h2>Nopanheitto</h2>
<p>Noppa arpoo lukuja kunnes tulos on 1</p>
```
```php
<?php 
$dice = 0;
while ($dice != 1) {
    $dice = rand(1,6);
    if ($dice == 1) {
      echo "Onnea, sait luvun 1";
      break;
    }
}

?>
```
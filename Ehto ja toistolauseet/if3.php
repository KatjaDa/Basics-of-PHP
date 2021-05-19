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
<?php
$etunimi = $_GET["etunimi"];
if (empty($etunimi)) {
  echo "Nimikentta on tyhja.<br>";
}
?>

<form action="luvut.php" method="get">
      Eka luku <input type="number" name="lukueka"> <br>
      Toka luku <input type="number" name="lukutoka"> <br>
      <input type="submit" value="Laheta Luvut">
    </form>

<a href="./kirjautuminen/login.php">Kirjautumislomakkeelle</a>
<h2>Nopanheitto</h2>
<p>Noppa arpoo lukuja kunnes tulos on 1</p>
<?php 
$dice = 0;
while ($dice != 1) {
    $dice = rand(1,6);
    echo "Nopan luku on : $dice <br>";
    if ($dice == 1) {
      echo "Onnea, sait luvun 1";
      break;
    }
}

?>
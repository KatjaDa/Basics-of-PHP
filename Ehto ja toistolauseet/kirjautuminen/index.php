<?php session_start(); /* avaa yhteyden */
include 'styles.css';
if(!isset($_SESSION['UserData']['Username'])){
header("location:login.php");
exit;
}
?>

Kirjautuminen onnistui! <a href="logout.php">Paina kirjautuaksesi ulos</a> 
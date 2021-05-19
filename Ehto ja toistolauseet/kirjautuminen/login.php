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
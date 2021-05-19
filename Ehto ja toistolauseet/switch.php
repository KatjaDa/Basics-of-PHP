<?php
/// tässä esimerkki kirjautumisen jälkeisen valintaan käyttäjäroolin mukaan
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
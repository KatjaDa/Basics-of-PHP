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
kertotaulu(20,21);
?>
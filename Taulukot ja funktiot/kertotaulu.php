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
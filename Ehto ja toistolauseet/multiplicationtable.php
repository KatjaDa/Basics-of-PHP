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
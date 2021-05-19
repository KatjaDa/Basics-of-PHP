<h2>Nopanheitto</h2>
<p>Noppa arpoo lukuja kunnes tulos on 1</p>
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
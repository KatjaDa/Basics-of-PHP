<?php

header("Content-Type: text/html; charset=UTF-8");
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
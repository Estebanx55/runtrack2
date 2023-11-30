<?php
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

$largeur = strlen($str);

for ($i = 0; $i< $largeur; $i += 2) {
    echo $str[$i];
}
<?php
$str="Dans l'espace, personne ne vous entend crier";
$num= 0;

for ($x= 0; isset($str[$x]); $x++) {
    $num++;
}

echo $num;
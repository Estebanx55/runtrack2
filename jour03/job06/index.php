<?php
$str = "Les choses que l'on possede finissent par nous posseder";
$largeurtext = strlen($str);
$rstr = ""; 

for ($i=$largeurtext - 1; $i >= 0; $i--) { 
    $rstr .= $str[$i];
}

echo $rstr;
?>
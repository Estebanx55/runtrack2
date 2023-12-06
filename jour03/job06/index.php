<?php
$str = "Les choses que l'on possede finissent par nous posseder.";
$largeurText = strlen($str);
$rstr = "";

for ($i = $largeurText - 1; $i >= 0; $i--) {
    $rstr .= $str[$i];
}

echo $rstr;
?>
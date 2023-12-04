<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$largeurtext = strlen($str);
$str1 = "";
$str2 = "";

for ($i = 0; $i < 1; $i++) {
    $str1 .= $str[$i];
}

for ($i = 1; $i < $largeurtext; $i++) {
    $str2 .= $str[$i];
}
echo $str2 . $str1;
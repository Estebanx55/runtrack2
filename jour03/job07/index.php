<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$largeurText = strlen($str);
$str1 = "";
$str2 = "";

for ($i = 0; $i < 1; $i++) {
    $str1 .= $str[$i];
}

for ($i = 1; $i < $largeurText; $i++) {
    $str2 .= $str[$i];
}
echo ucfirst($str2) . strtolower($str1);
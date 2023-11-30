<?php
$num = -1;

while ($num <= 99) {
    $num++;
if ($num <= 20) {
    echo "<br/> <i>" .$num ."</i>";
}
elseif($num >= 25 and $num <= 41 or $num >= 43 and $num <= 50){
    echo "<br/> <u>" .$num ."</u>";
}
elseif ($num == 42) {
    echo "<br/>LaPlateforme";
}
else {
    echo "<br/>" .$num;
}
}


   
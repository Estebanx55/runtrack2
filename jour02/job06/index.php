<?php
$bg = imagecreatetruecolor(300,200);
$blue = imagecolorallocate($bg, 132, 135, 28);
imagerectangle($bg, 275,180 ,10,5, $blue);

header('Content-Type: image/jpeg');
imagejpeg($bg);
imagedestroy($bg);
?>
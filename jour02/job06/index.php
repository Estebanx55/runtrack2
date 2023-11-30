<?php
$bg = imagecreatetruecolor(30,20);
$blue = imagecolorallocate($bg, 132, 135, 28);
imagerectangle($bg, 25,15,1,5, $blue);

header('Content-Type: image/jpeg');
imagejpeg($bg);
imagedestroy($bg);
?>
<?php
$hauteur = 100 ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .triangle{
            text-align: center;
            display:inline-block;
        }
    </style>
</head>
<body>
    <div class=triangle>
    <?php 
    for ($num = 0; $num <= $hauteur; $num++) {
    echo '/' . str_repeat("&nbsp;&nbsp;", $num) . '\\' . "</br>";
    if ($num == $hauteur) {
        echo '/_' . str_repeat('_', $num) . '\\';

    }
}
?>
</div>
</body>
</html>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .triangle {
            text-align: center;
            display: inline-block;
        }
    </style>
</head>

<body>
    <form method="get" action="">
        <label for="Largeur">Largeur:</label>
        <input type="text" name="Largeur"><br>

        <label for="Hauteur">Hauteur:</label>
        <input type="text" name="Hauteur"><br>

        <input type="submit" value="Envoyer">
    </form>
    <div class=triangle>
        <?php
        $largeur = $_GET["Largeur"];
        $hauteur = $_GET["Hauteur"];

        if ($_SERVER["REQUEST_METHOD"] == "GET") {

            for ($num = 0; $num <= $hauteur; $num++) {
                echo '/' . str_repeat("__", $num) . '\\' . "</br>";
                if ($num == $hauteur) {
                    echo '/_' . str_repeat('__', $num) . '\\' . "</br>";
                }
            }
            for ($num = 0; $num <= $largeur; $num++) {
                echo '|' . str_repeat("&nbsp;&nbsp;&nbsp;&nbsp;", $largeur) . '|' . "</br>";
                if ($num == $largeur) {
                    echo '|' . str_repeat('__', $num) . '|';
                }
            }
        }
        ?>
    </div>


</body>

</html>
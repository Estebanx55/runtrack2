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

        <input type="submit" name="Envoyer" value="Envoyer">
    </form>
    <div class=triangle>
        <?php
        if (isset($_GET["Envoyer"])) {
        $largeur = $_GET["Largeur"];
        $hauteur = $_GET["Hauteur"];
        

            for ($num = 0; $num <= $hauteur; $num++) {
                echo '/' . str_repeat("_", $num) . '\\' . "</br>";
                if ($num == $hauteur) {
                    echo '/_' . str_repeat('_', $num) . '\\' . "</br>";
                }
            }
            for ($num = 0; $num <= $hauteur; $num++) {
                echo '|' . str_repeat("&nbsp;&nbsp;", $hauteur) . '|' . "</br>";
                if ($num == $hauteur) {
                    echo '|' . str_repeat('_', $hauteur) . '|';
                }
            }
        }
        ?>
    </div>


</body>

</html>
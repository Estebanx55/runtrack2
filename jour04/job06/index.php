<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="get" action="">
        <label for="Nombre">nombre:</label>
        <input type="text" name="nombre"><br>

        <input type="submit" value="Envoyer">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if ($_GET["nombre"] % 2 == 0) {
            echo "Nombre pair";
        } else {
            echo "Nombre impair";
        }
    }
    ?>
</body>

</html>
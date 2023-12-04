<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>



<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre_arguments = count($_POST);
        echo "Le nombre d'arguments POST envoyés est : " . $nombre_arguments;
    }
    ?>
    <form method="POST" action="">
        <label for="Prenom">Prenom:</label>
        <input type="text" name="Prenom"><br>

        <label for="Age">Age:</label>
        <input type="text" name="Age"><br>

        <input type="submit" value="Envoyer">
    </form>

    <?php
    var_dump($_POST);
    ?>
</body>

</html>
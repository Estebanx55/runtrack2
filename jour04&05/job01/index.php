<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            color: red;
            border: red;
        }
    </style>
</head>



<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $nombre_arguments = count($_GET);
        echo "Le nombre d'arguments GET envoyés est : " . $nombre_arguments;
    }
    ?>
    <form method="get" action="">
        <label for="Prenom">Prenom:</label>
        <input type="text" name="Prenom"><br>

        <label for="Age">Age:</label>
        <input type="text" name="Age"><br>

        <input type="submit" value="Envoyer">
    </form>

    <?php
    var_dump($_GET);
    ?>
</body>

</html>
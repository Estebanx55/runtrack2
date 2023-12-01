<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

        <label for="Nom">Nom:</label>
        <input type="text" name="Nom"><br>

        <input type="submit" value="Envoyer">
    </form>

    <table>
        <tr>
            <th>Argument</th>
            <th>Valeur</th>
        </tr>
        <tr>
            <td>Prenom</td>
            <td>
                <?php if ($nombre_arguments == 0) {
                    echo "";
                } else {
                    echo $_GET["Prenom"];
                } ?>
            </td>
        </tr>
        <tr>
            <td>Nom</td>
            <td>
                <?php if ($nombre_arguments == 0) {
                    echo "";
                } else {
                    echo $_GET["Nom"];
                } ?>
            </td>
        </tr>
    </table>
    <?php
    var_dump($_GET);
    ?>
</body>

</html>
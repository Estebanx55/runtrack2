<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>



<body>
    <?php
    $nombre_arguments = 0;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre_arguments = count($_POST);
    }
    ?>
    <form method="post" action="">
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
                    echo $_POST["Prenom"];
                } ?>
            </td>
        </tr>
        <tr>
            <td>Nom</td>
            <td>
                <?php if ($nombre_arguments == 0) {
                    echo "";
                } else {
                    echo $_POST["Nom"];
                } ?>
            </td>
        </tr>
    </table>
    <?php
    var_dump($_POST);
    ?>
</body>

</html>
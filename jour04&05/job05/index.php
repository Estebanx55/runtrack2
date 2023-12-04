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
        echo "Le nombre d'arguments Post envoyés est : " . $nombre_arguments;
    }
    ?>
    <form method="POST" action="">
        <label for="username">username:</label>
        <input type="text" name="username"><br>

        <label for="password">password:</label>
        <input type="text" name="password"><br>

        <input type="submit" value="Envoyer">
    </form>
    <?php
    $John = $_POST["username"];
    $Rambo = $_POST["password"];
    
    if ($John == "John" and $Rambo == "Rambo") {
        echo "C'est pas ma guerre";
    }   
    else {
        echo "Votre pire cauchemar";
    }
    ?>
</body>

</html>
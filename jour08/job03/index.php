<?php
session_start();

$prenoms = $_SESSION["prenoms"] ?? [];

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(isset($_POST['prenom'])) {
        $prenoms[] = $_POST['prenom'];

        $_SESSION['prenoms'] = $prenoms;
    }
}

if(isset($_POST['reset'])) {
    $_SESSION['prenoms'] = [];

    $prenoms= [];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="prenom"> Prenom: </label>
        <input type="text" name="prenom" >
        <input type="submit" value="Add">
    </form>
    <form method="Post">
        <input type="submit" name="reset" value="reset list">
    </form>
    <ul>
        <?php
        foreach($prenoms as $prenom) {
            echo "<li>$prenom</li>";
        }
        ?>
    </ul>
</body>
</html>
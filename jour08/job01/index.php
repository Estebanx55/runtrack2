<?php
session_start();

if (isset($_POST["reset"])) {
    if (isset($_SESSION['nbvisites'])) {
        $_SESSION['nbvisites'] = 0;
    }
    session_unset();
    session_destroy();
    header("Location:" . $_SERVER['PHP_SELF']);
    exit;
}
if (!isset($_SESSION['nbvisites'])) {
    $_SESSION['nbvisites'] = 0;
} else {
    $_SESSION['nbvisites']++;
}
echo "Nombre de visites : {$_SESSION['nbvisites']}";
?>

<form method="post">
    <input type="submit" name="reset" value="Réinitialiser le compteur">
</form>
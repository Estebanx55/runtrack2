<?php

session_start();


$nbvisites = isset($_COOKIE['nbvisites']) ? (int)$_COOKIE['nbvisites'] : 0;


if(isset($_POST['reset'])) {

    setcookie('nbvisites', '', time() - 3600, '/');

    $nbvisites = 0;
} else {

    $nbvisites++;
    setcookie('nbvisites', $nbvisites, time() + 3600 * 24 * 30, '/');
}


echo "Nombre de visites : $nbvisites";
?>


<form method="post">
    <input type="submit" name="reset" value="Réinitialiser le compteur">
</form>
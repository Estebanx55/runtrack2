<?php
session_start();



if(isset($_POST["reset"])) {
    $_SESSION['nbvisites'] = 0;
} else {
    $_SESSION['nbvisites']++;
}

echo "Nombre de visites : {$_SESSION['nbvisites']}";

?>
<form method="post">
    <input type="submit" name="reset" value="Réinitialiser le compteur">
</form>
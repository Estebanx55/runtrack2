<?php
$monCookie = isset($_COOKIE['prenom']) ? $_COOKIE['prenom'] : '';
if(isset($_POST['deco'])) {
    setcookie('prenom', '', time() - 3600, '/');
    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
}
if(!empty($monCookie)) {
    echo "<p>Bonjour $monCookie</p><form method=post><input type='submit' name='deco' value='deco'></form>";
} else {
    echo "<form method='post'><label for='prenom'>Prenom:</label><input type='text id='prenom' name='prenom'><br><input type='submit' name='Envoyer' value='Envoyer'></form>";
    if(isset($_POST["Envoyer"])) {
        $prenom = isset($_POST["prenom"]) ? $_POST["prenom"] : "";
        setcookie("prenom", $prenom, time() + 3600, "/");
        header("Location:".$_SERVER['PHP_SELF']);
        exit();
    }
}
?>
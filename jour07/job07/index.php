<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for="Mot">Mot:</label>
        <input type="text" name="Mot"><br>
        <select name="foction" id="foction">
            <optgroup label="foction">
                <option value="gras" name="gras"> gras </option>
                <option value="cesar" name="cesar"> cesar </option>
                <option value="plateforme" name="plateforme"> plateforme </option>
            </optgroup>
        </select>
        <input type="submit" name="valider " value="Valider" />
    </form>
    <?php
    function gras($str) {
        $gras = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
        $i = 0;
        while(isset($str[$i])) {
            $char = $str[$i];
            if(in_array($char, $gras)) {
                echo '<b>'.$str.'</b>';
                break;
            } else {
                echo $str;
                break;
            }
        }
    }
    function cesar($str, $decalage = 2) {
        $result = '';
        for($i = 0; $i < strlen($str); $i++) {
            $char = $str[$i];
            if(ctype_alpha($char)) {
                $isUpper = ctype_upper($char);
                $char = chr((ord($char) - ($isUpper ? ord('A') : ord('a')) + $decalage) % 26 + ($isUpper ? ord('A') : ord('a')));
            }
            $result .= $char;
        }
        return $result;
    }

    function plateforme($str) {
        $largeurText = strlen($str);
        $rstr = "";
    
        for ($i = $largeurText - 1; $i >= 0; $i--) {
            if ($i >= 1 && $str[$i - 1] == 'm' && $str[$i] == 'e') {
                $rstr .= '_';
            }
            $rstr .= $str[$i];
        }
        return strrev($rstr);
    }
    $str = $_POST['Mot'];

    if(isset($_POST["foction"])) {
        if($_POST["foction"] == "gras") {
            echo gras($str);
        }
    }

    if(isset($_POST["foction"])) {
        if($_POST["foction"] == "cesar") {
            echo cesar($str);
        }
    }

    if(isset($_POST["foction"])) {
        if($_POST["foction"] == "plateforme") {
            echo plateforme($str);
        }
    }
    ?>
</body>

</html>
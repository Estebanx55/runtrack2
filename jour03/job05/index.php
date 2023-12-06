<?php
$str = "On n'est pas le meilleur quand on le croit mais quand on le sait";
$dic = "Consonnes";
$dic2 = "Voyelles";
$Consonnes = ['B', 'C', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 'N', 'P', 'Q', 'R', 'S', 'T', 'V', 'W', 'X', 'Z', 'b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'z'];
$Voyelles = ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'];
$echo = 0;
$echo1 = 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border: solid, black, 1px;
            background-color: red;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th>
                <?php echo $dic; ?>
            </th>
            <th>
                <?php echo $dic2; ?>
            </th>
        </tr>
        <tr>
            <td>
                <?php foreach (str_split($str) as $leter) {
                    if (in_array($leter, $Consonnes)) {
                        $echo++;
                    }
                }
                echo $echo ?>
            </td>
            <td>
                <?php foreach (str_split($str) as $leter1) {
                    if (in_array($leter1, $Voyelles)) {
                        $echo1++;
                    }
                }
                echo $echo1 ?>
            </td>
        </tr>
    </table>
</body>

</html>
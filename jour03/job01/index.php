<?php
$nums = [200, 204, 173, 98, 171, 404, 459];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Num</th><th>Pair ou Impair</th>
        </tr>
        <?php
        foreach ($nums as $number) {
            echo "<tr>
            <td>$number</td>
            <td>" . ($number % 2 == 0 ? 'est paire' : 'est impaire') . "</td>
              </tr>";
        }
        ?>
    </table>
</body>
</html>
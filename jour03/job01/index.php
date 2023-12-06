<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border: black 1px solid;
            background-color: red;
            color: white;
        }

        td {
            border: black 1px solid;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th>Num</th>
            <th>Pair ou Impair</th>
        </tr>
        <?php
        $nums = [200, 204, 173, 98, 171, 404, 459];
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
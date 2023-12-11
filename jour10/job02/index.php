<?php
$connexion = mysqli_connect('localhost', 'root');
mysqli_select_db($connexion, 'jour09');


$command="SELECT nom , capacite FROM salles;";
$result = mysqli_query($connexion, $command); 



echo "<table>";

echo "<tr>";
while ($fieldInfo = mysqli_fetch_field($result)) {
    echo "<th>" . $fieldInfo->name . "</th>";
}
echo "</tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    foreach ($row as $row) {
        echo "<td>" . $row . "</td>";
    }
}
echo "</tr></table>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border: solid black 1px;
        }
        td{
            border: solid black 1px;
        }
    </style>
</head>
<body>
    
</body>
</html>
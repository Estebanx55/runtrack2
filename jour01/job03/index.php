<?php
$VariableNum = 7;
$VariableNum1 =17;
$VariableNum2 =27;
$VariableNum3 =37;
$myBool= true;
$myBool1 = false;
$VariableABC= "hola";
$VariableABC1= "adios";
$VariableABC3= "no";
$VariableABC2= "si";
$VariableFloat1= 0.7;
$VariableFloat2= 0.77;
$VariableFloat3= 0.777;
$VariableFloat4= 0.7777;
$boolean = "boolean";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            background-color: red;
            border: solid black 1px;
            padding: 1%;
            color: white;
            margin-left: 42%;
            margin-top: 10%;
        }
    </style>
</head>
<body>                                                                                     
    <table border=1>
        <tr>
        <th>type</th><th>valeur</th><th>nom</th>
        </tr>
        <tr>
        <td><?php echo gettype($VariableABC1);?></td><td><?php echo $VariableABC1;?></td><td><?php echo '$VariableABC1';?></td>
        </tr>
        <tr>
        <td><?php echo gettype($myBool);?></td><td><?php echo $boolean;?></td><td><?php echo '$boolean';?></td>
        </tr>
        <tr>
        <td><?php echo gettype($VariableNum);?></td><td><?php echo $VariableNum;?></td><td><?php echo '$VariableNum';?></td>
        </tr>
        <tr>
        <td><?php echo gettype($VariableFloat1);?></td><td><?php echo $VariableFloat1;?></td><td><?php echo '$VariableFloat1';?></td>
        </tr>
        <tr>
        <td><?php echo gettype($VariableABC);?></td><td><?php echo $VariableABC;?></td><td><?php echo '$VariableABC';?></td>
        </tr>
        <tr>
        <td><?php echo gettype($VariableNum2);?></td><td><?php echo $VariableNum2;?></td><td><?php echo '$VariableNum2';?></td>
        </tr>
        <tr>
        <td><?php echo gettype($VariableFloat3);?></td><td><?php echo $VariableFloat3;?></td><td><?php echo '$VariableFloat3';?></td>
        </tr>
        <tr>
        <td><?php echo gettype($VariableNum3);?></td><td><?php echo $VariableNum3;?></td><td><?php echo '$VariableNum3';?></td>
        </tr>
        <tr>
        <td><?php echo gettype($VariableABC3);?></td><td><?php echo $VariableABC3;?></td><td><?php echo '$VariableABC3';?></td>
        </tr>
        <tr>
        <td><?php echo gettype($VariableABC2);?></td><td><?php echo $VariableABC2;?></td><td><?php echo '$VariableABC2';?></td>
        </tr>
        <tr>
        <td><?php echo gettype($VariableFloat4);?></td><td><?php echo $VariableFloat4;?></td><td><?php echo '$VariableFloat4';?></td>
        </tr>
        <tr>
        <td><?php echo gettype($VariableNum1);?></td><td><?php echo $VariableNum1;?></td><td><?php echo '$VariableNum1';?></td>
        </tr>
        <tr>
        <td><?php echo gettype($VariableFloat2);?></td><td><?php echo $VariableFloat2;?></td><td><?php echo '$VariableFloat2';?></td>
        </tr>
    </table>
</body>
</html>
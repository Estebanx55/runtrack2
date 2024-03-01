<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="">
        <select name="style" id="style">
            <optgroup label="style">
                <option value="style1" name="style1"> style1 </option>
                <option value="style2" name="style2"> style2 </option>
                <option value="style3" name="style3"> style3 </option>
            </optgroup>
        </select>
        <input type="submit" name="valider " value="Valider" />
    </form>
    <?php
    if (isset($_POST["style"])) {
        if ($_POST["style"] == "style1") {
        //     echo '<head><link rel="stylesheet" href="green.css"></head>';
        //     echo 'STYLE 1';
        // }
        // if ($_POST["style"] == "style2") {
        //     echo '<head><link rel="stylesheet" href="blue.css"></head>';
        //     echo 'STYLE 2';
        // }
        // if ($_POST["style"] == "style3") {
        //     echo '<head><link rel="stylesheet" href="red.css"></head>';
        //     echo 'STYLE 3';
        }
    }
    ?>
</body>

</html>
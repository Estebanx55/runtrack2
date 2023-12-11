<?php
session_start();

// Initialize button values if not set
$buttons = isset($_SESSION['buttons']) ? $_SESSION['buttons'] : array_fill(1, 9, '');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($buttons as $key => $value) {
        if (isset($_POST['cell' . $key])) {
            $buttons[$key] = ($value == 'X') ? 'O' : 'X';
        }
    }
    $_SESSION['buttons'] = $buttons;
}
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
        <?php for ($i = 1; $i <= 3; $i++): ?>
            <td>
                <form method="post">
                    <input type='submit' name='cell<?php echo $i; ?>' value="<?php echo $buttons[$i]; ?>">
                </form>
            </td>
        <?php endfor; ?>
    </tr>
    <tr>
        <?php for ($i = 4; $i <= 6; $i++): ?>
            <td>
                <form method="post">
                    <input type='submit' name='cell<?php echo $i; ?>' value="<?php echo $buttons[$i]; ?>">
                </form>
            </td>
        <?php endfor; ?>
    </tr>
    <tr>
        <?php for ($i = 7; $i <= 9; $i++): ?>
            <td>
                <form method="post">
                    <input type='submit' name='cell<?php echo $i; ?>' value="<?php echo $buttons[$i]; ?>">
                </form>
            </td>
        <?php endfor; ?>
    </tr>
</table>

</body>
</html>
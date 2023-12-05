<?php
function ocurrences($str, $char)
{
    $nombrechar = 0;
    $i = 0;

    while (isset($str[$i])) {
        if ($str[$i] == $char) {
            $nombrechar++;
        }

        $i++;
    }
    return $nombrechar;
}
$str = 'bonjour';
$char = 'o';

echo ocurrences($str, $char);

?>
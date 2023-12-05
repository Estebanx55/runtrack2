<?php
function calcule($a, $operation, $b)
{
    if ($operation == "+") {
        return $a + $b;
    }
    if ($operation == "-") {
        return $a - $b;
    }
    if ($operation == "*") {
        return $a * $b;
    }
    if ($operation == "/") {
        return $a / $b;
    }
    if ($operation == "%") {
        return $a % $b;
    }
}


echo calcule(2, "*", 6);
?>
<?php
function leetSpeak($str)
{
    $nombre = 0;

    while (isset($str[$nombre])) {
        $char = $str[$nombre];
        $a = ["A", "a"];
        $b = ["B", "b"];
        $e = ["e" ,"E"];
        $g = ["G", "g"];
        $l = ["L", "l"];
        $s = ["S", "s"];
        $t = ["T", "t"];
        if (in_array($char, $a)) {
            echo "4";
        }
        if (in_array($char, $b)) {
            echo "8";
        }
        if (in_array($char, $e)) {
            echo "3";
        }
        if (in_array($char, $g)) {
            echo "6";
        }
        if (in_array($char, $l)) {
            echo "1";
        }
        if (in_array($char, $s)) {
            echo "5";
        }
        if (in_array($char, $t)) {
            echo "7";
        }
        $nombre++;
    }

}
$str = 'leetSpeak';
leetSpeak($str);
<?php

$num = 600851475143;
$i = 2;
function find($num, $i): int
{
    while ($num != 1) {
        if (($num % $i) == 0) {
            $num = $num / $i;
            find($num, $i);
        } else {
            $i ++;
            find($num, $i);
        }
    }
    return $i;
}

echo find($num, $i);

// работает только с маленькими числами
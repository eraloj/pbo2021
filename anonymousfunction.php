<?php

/**
 * CONTOH PENGGUNAAN ANONYMOUS FUNCTION
 */

$jml = function ($a, $b) {
    $c = $a + $b;
    return $c;
};

function perkalian($x, $y = 12)
{
    $z = $x * $y;
    return $z;
}

echo perkalian(4, function () {
    return 4 * 5;
});

echo $jml(5, 7);
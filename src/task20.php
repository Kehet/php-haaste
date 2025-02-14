<?php

/*
 * Tehtävä 20: Fibonaccin luvut
 *
 * Kaksi ensimmäistä Fibonaccin lukua ovat 0 ja 1. Tämän jälkeen seuraava Fibonaccin luku saadaan laskemalla yhteen kaksi edellistä. Fibonaccin luvut ovat siis:
 *
 * 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, ...
 *
 * Tehtävänä on laskea n:s Fibonaccin luku. Voit olettaa, että vastaus on alle miljardi.
 */

$n = $_REQUEST['n'];

if ($n === "1") {
    return 0;
}

if ($n === "2") {
    return 1;
}

$previous = 0;
$current = 1;

for ($i = 3; $i <= $n; $i++) {
    $previousOfPrevious = $previous;
    $previous = $current;
    $current = $previous + $previousOfPrevious;
}

return $current;

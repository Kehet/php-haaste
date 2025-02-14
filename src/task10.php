<?php

/*
 * Tehtävä 10: Kertoma
 *
 * Luvun n kertoma n! on tulo 1 * 2 * 3 * ... * n. Esimerkiksi 5! = 1 * 2 * 3 * 4 * 5 = 120. Lisäksi on määritelty 0! = 1. Mikä on luvun n kertoma? Voit olettaa, että vastaus on korkeintaan miljardi.
 */

$n = $_REQUEST['n'];

$result = 1;

for ($i = 1; $i <= $n; $i++) {
    $result *= $i;
}

return $result;

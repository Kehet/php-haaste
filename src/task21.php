<?php

/*
 * Tehtävä 21: Lukujen kirjoitus
 *
 * Kalle kirjoittaa kokonaisluvut 1:stä lukuun n. Kuinka monta kertaa Kalle kirjoittaa kunkin numeron? Voit olettaa, että n on korkeintaan 1000.
 *
 * Esimerkiksi jos n on 15, Kalle kirjoittaa luvut 1, 2, 3, ..., 15. Kalle kirjoittaa siis kahdeksan kertaa numeron 1, kaksi kertaa numerot 2, 3, 4 ja 5 sekä kerran numerot 0, 6, 7, 8 ja 9.
 */

$n = $_REQUEST['n'];

$countTable = array_fill(0, 10, 0);

for ($i = 1; $i <= $n; $i++) {
    foreach (str_split((string)$i) as $number) {
        $countTable[$number]++;
    }
}

return implode(' ', $countTable);

<?php

declare(strict_types=1);

/*
 * Tehtävä 7: Kaksi summaa
 *
 * Jos luvut 1, 2, 3, 4 ja 5 lasketaan yhteen, summa on 15. Vastaavasti jos lukujen neliöt 12, 22, 32, 42 ja 52 lasketaan yhteen, summa on 55. Tehtävänä on laskea vastaavat summat, kun luvut ovat 1, 2, 3, ..., n. Voit olettaa, että kumpikin summa on alle miljardi.
 */

$n = $_REQUEST['n'];

$sum = 0;
$pow = 0;

for ($i = 1; $i <= $n; $i++) {
    $sum += $i;
    $pow += $i ** 2;
}

return $sum . ' ' . $pow;

<?php

/*
 * Tehtävä 12: Toistuva luku
 *
 * Lukujen 5, 3, 8, 2, 5, 7 ja 1 joukossa on kaksi kertaa sama luku, nimittäin luku 5. Tehtävänä on tutkia, onko lukujoukossa monta kertaa sama luku. Voit olettaa, että lukuja on korkeintaan 100 ja ne ovat kokonaislukuja välillä 0–1000000.
 */

$numbers = explode('|', $_REQUEST['luvut']);

$countTable = [];
foreach ($numbers as $number) {
    $countTable[$number] = ($countTable[$number] ?? 0) + 1;
}

foreach ($countTable as $count) {
    if ($count > 1) {
        return '1';
    }
}

return '0';

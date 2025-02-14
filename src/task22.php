<?php

/*
 * Tehtävä 22: Taikaneliö
 *
 * Taikaneliö on n x n -ruudukko, johon on sijoitettu luvut 1–n2. Kun taikaneliön minkä tahansa rivin, sarakkeen tai lävistäjän luvut lasketaan yhteen, tulos on sama. Tässä on yksi 4 x 4 -taikaneliö:
 *
 * +----+----+----+----+
 * | 1  | 15 | 14 | 4  |
 * +----+----+----+----+
 * | 12 | 6  | 7  | 9  |
 * +----+----+----+----+
 * | 8  | 10 | 11 | 5  |
 * +----+----+----+----+
 * | 13 | 3  | 2  | 16 |
 * +----+----+----+----+
 *
 * Jokaisen rivin, sarakkeen ja lävistäjän lukujen summa on 34. Esimerkiksi toisen rivin summa on 12 + 6 + 7 + 9 = 34 ja vasemmasta alakulmasta alkavan lävistäjän summa on 13 + 10 + 7 + 4 = 34.
 *
 * Tehtävänä on tarkistaa, onko annettu 4 x 4 -taikaneliö kelvollinen eli sisältääkö se kaikki luvut 1–16 ja onko jokaisen rivin, sarakkeen ja lävistäjän lukujen summa sama.
 */

$square = explode('|', $_REQUEST['nelio']);

$countTable = array_count_values($square);
if (count($countTable) !== 16) {
    return '0';
}

$rows = [
    [0, 1, 2, 3],
    [4, 5, 6, 7],
    [8, 9, 10, 11],
    [12, 13, 14, 15],
    [0, 4, 8, 12],
    [1, 5, 9, 13],
    [2, 6, 10, 14],
    [3, 7, 11, 15],
    [0, 5, 10, 15],
    [3, 6, 9, 12],
];

foreach ($rows as $row) {
    if (array_sum([$square[$row[0]], $square[$row[1]], $square[$row[2]], $square[$row[3]]]) !== 34) {
        return '0';
    }
}

return '1';

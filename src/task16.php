<?php

/*
 * Tehtävä 16: Taulukon järjestys
 *
 * Luvut 4, 7, 5, 9, ja 10 eivät ole järjestyksessä, koska luku 7 tulee ennen lukua 5. Tehtävänä on selvittää, ovatko annetut luvut järjestyksessä pienimmästä suurimpaan. Voit olettaa, että lukuja on korkeintaan sata ja luvut ovat positiivisia kokonaislukuja ja pienempiä kuin miljoona.
 */

$numbers = explode('|', $_REQUEST['luvut']);

for ($i = 1, $iMax = count($numbers); $i < $iMax; $i++) {
    if ($numbers[$i] < $numbers[$i - 1]) {
        return '0';
    }
}

return '1';

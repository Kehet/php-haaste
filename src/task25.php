<?php

/*
 * Tehtävä 25: Pienin ero
 *
 * Luvuista 2, 8, 13, 5, 7 ja 10 lähimpänä toisiaan ovat luvut 7 ja 8, sillä niiden ero on vain 1. Tehtävänä on selvittää, mikä on kahden lähimmän luvun ero annetussa lukujoukossa. Voit olettaa, että lukuja on korkeintaan 100 ja luvut ovat positiivisia kokonaislukuja välillä 0–1000000.
 */

$numbers = explode('|', $_REQUEST['luvut']);

sort($numbers);

$difference = 1000001;
for ($i = 1, $iMax = count($numbers); $i < $iMax; $i++) {
    if ($numbers[$i] - $numbers[$i - 1] < $difference) {
        $difference = $numbers[$i] - $numbers[$i - 1];
    }
}

return $difference;

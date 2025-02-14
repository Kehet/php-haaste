<?php

/*
 * Tehtävä 17: Kaikki paitsi yksi
 *
 * Lukujen 4, 1, 3 ja 5 joukossa ovat kaikki luvut väliltä 1–5 paitsi luku 2. Tehtävässä annetaan jossain järjestyksessä kaikki luvut väliltä 1–n yhtä lukuun ottamatta, ja tarkoitus on selvittää, mikä luku puuttuu. Voit olettaa, että n on korkeintaan 1000 ja jokainen luku annetaan vain kerran.
 */

$n = $_REQUEST['n'];
$numbers = explode('|', $_REQUEST['luvut']);

$expectedSum = ($n * ($n + 1)) / 2;
$actualSum = array_sum($numbers);

return $expectedSum - $actualSum;

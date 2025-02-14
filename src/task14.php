<?php

/*
 * Tehtävä 14: Lottorivi
 *
 * Uolevilla on lottokuponki, jossa on numerot 3, 6, 7, 10, 23, 26 ja 36. Lottokone taas arpoo numerot 5, 7, 14, 18, 26, 31 ja 38. Tämä tarkoittaa, että Uolevin kupongissa on kaksi numeroa oikein, nimittäin numerot 7 ja 26.
 *
 * Tehtävänä on selvittää, kuinka monta numeroa on oikein, kun tiedossa ovat lottokupongin numerot sekä lottokoneen arpomat numerot. Numeroita on seitsemän ja ne ovat välillä 1–39. Voit olettaa, että numerot ilmoitetaan pienimmästä suurimpaan.
 */

$numbers1 = explode('|', $_REQUEST['num1']);
$numbers2 = explode('|', $_REQUEST['num2']);

$count = 0;

foreach ($numbers1 as $number1) {
    if (in_array($number1, $numbers2)) {
        $count++;
    }
}

return $count;

<?php

/*
 * Tehtävä 30: Outo algoritmi
 *
 * Tarkastellaan seuraavaa algoritmia:
 *
 * A. Valitaan jokin kokonaisluku n.
 * B. Jos n on parillinen, jaetaan se kahdella. Jos taas n on pariton, kerrotaan se kolmella ja lisätään tulokseen yksi.
 * C. Jos n on yksi, lopetetaan. Muuten palataan kohtaan B.
 *
 * Esimerkiksi jos valitaan aluksi n = 6, algoritmi toimii seuraavasti:
 *
 * 6 / 2 = 3
 * 3 * 3 + 1 = 10
 * 10 / 2 = 5
 * 5 * 3 + 1 = 16
 * 16 / 2 = 8
 * 8 / 2 = 4
 * 4 / 2 = 2
 * 2 / 2 = 1
 *
 * Tässä algoritmi suoritti kahdeksan kertaa vaiheen B, ennen kuin päästiin lukuun yksi. Tehtävänä on selvittää annetulla n:n arvolla, kuinka monta kertaa algoritmi suorittaa vaiheen B. Voit olettaa, että algoritmi suorittaa vaiheen B korkeintaan tuhat kertaa ja n on joka vaiheessa korkeintaan miljardi.
 */

$n = $_REQUEST['n'];

$count = 0;
while ($n !== 1) {
    if ($n % 2 === 0) {
        $n /= 2;
    } else {
        $n = ($n * 3) + 1;
    }
    $count++;
}

return $count;

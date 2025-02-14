<?php

/*
 * Tehtävä 29: Sanan kierto II
 *
 * Kun sanaa kierretään vasemmalle, sen ensimmäinen kirjain siirtyy viimeiseksi. Kun sanaa kierretään oikealle, sen viimeinen kirjain siirtyy ensimmäiseksi. Esimerkiksi jos sanaa AVARUUS kierretään kolmesti vasemmalle, lopputulos on RUUSAVA.
 *
 * Tehtävänä on selvittää, saako sanan muutettua toiseksi kiertämällä sitä. Esimerkiksi sanan AVARUUS saa muutettua sanaksi RUUSAVA ja samoin sanan RUUSAVA saa muutettua sanaksi AVARUUS. Kuitenkaan sanaa AVARUUS ei saa muutettua sanaksi VAURAUS.
 *
 * Voit olettaa, että sanassa on korkeintaan sata kirjainta.
 */

$word1 = $_REQUEST['sana1'];
$word2 = $_REQUEST['sana2'];

if ($word1 === $word2) {
    return '1';
}

$iMax = strlen($word1) + 1;

for ($i = 0; $i < $iMax; $i++) {
    $word1 = substr($word1, 1) . substr($word1, 0, 1);

    if ($word1 === $word2) {
        return '1';
    }
}

for ($i = 0; $i < $iMax; $i++) {
    $word1 = substr($word1, -1, 1) . substr($word1, 0, -1);

    if ($word1 === $word2) {
        return '1';
    }
}

return '0';

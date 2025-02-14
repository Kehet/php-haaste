<?php

/*
 * Tehtävä 28: Sanan kierto I
 *
 * Kun sanaa kierretään vasemmalle, sen ensimmäinen kirjain siirtyy viimeiseksi. Kun sanaa kierretään oikealle, sen viimeinen kirjain siirtyy ensimmäiseksi. Esimerkiksi jos sanaa AVARUUS kierretään kolmesti vasemmalle, lopputulos on RUUSAVA.
 *
 * Tehtävänä on selvittää, miten sana muuttuu, kun sitä kierretään tietyn verran tiettyyn suuntaan. Voit olettaa, että sanassa on korkeintaan sata kirjainta ja sitä kierretään korkeintaan tuhat kertaa.
 */

$word = $_REQUEST['sana'];
$direction = $_REQUEST['suunta'];
$amount = $_REQUEST['maara'];

for ($i = 0; $i < $amount; $i++) {
    if ($direction === 'V') {
        $word = substr($word, 1) . substr($word, 0, 1);
    } else {
        $word = substr($word, -1, 1) . substr($word, 0, -1);
    }
}

return $word;

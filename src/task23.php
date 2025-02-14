<?php

/*
 * Tehtävä 23: Palindromimuunnos
 *
 * Palindromiluvun numerot ovat samat alusta loppuun ja lopusta alkuun luettuina. Esimerkiksi luvut 1441 ja 73237 ovat palindromilukuja. Luvun voi yrittää muuttaa palindromiluvuksi lisäämällä siihen toistuvasti luku, joka sisältää luvun numerot käänteisessä järjestyksessä.
 *
 * Esimerkiksi jos aloitetaan luvusta 19, siihen lisätään ensin 91, jolloin tulos on 110. Tähän taas lisätään 011 eli 11, jolloin tulos on 121 ja on saatu aikaan palindromiluku.
 *
 * Tehtävänä on selvittää, kuinka monta lisäystä tarvitaan, ennen kuin tietystä luvusta tulee palindromiluku. Voit olettaa, että aloitusluku on positiivinen kokonaisluku ja alle miljoona, lisäyksiä tarvitaan korkeintaan tuhat ja lopputulos on alle miljardi.
 */

$n = $_REQUEST['n'];

if (!function_exists('isPalindrome')) {
    function isPalindrome($n): bool
    {
        return (string)$n === strrev($n);
    }
}

$counter = 0;

while (!isPalindrome($n)) {
    $n += (int)strrev($n);
    $counter++;
}

return $counter;

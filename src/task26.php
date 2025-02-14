<?php

/*
 * Tehtävä 26: Anagrammit
 *
 * Sanan anagrammi saadaan järjestämällä sanan kirjaimet uudestaan. Esimerkiksi sanan MIKROSEKUNTI anagrammi on SOINTUMERKKI. Tehtävänä on tarkistaa, ovatko kaksi sanaa toistensa anagrammeja. Voit olettaa, että sanat muodostuvat kirjaimista A–Z ja kummassakin sanassa on korkeintaan 50 kirjainta.
 */

$word1 = $_REQUEST['sana1'];
$word2 = $_REQUEST['sana2'];

$word1 = str_split(mb_strtolower($word1));
$word2 = str_split(mb_strtolower($word2));

$word1 = array_count_values($word1);
$word2 = array_count_values($word2);

ksort($word1);
ksort($word2);

return $word1 === $word2 ? '1' : '0';

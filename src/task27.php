<?php

/*
 * Tehtävä 27: Sanan lyhennys
 *
 * Sanasta SUORAKULMIO saadaan sana SALI poistamalla osa kirjaimista. Tehtävänä on selvittää, voiko sanan muuttaa toiseksi poistamalla siitä kirjaimia. Jäljelle jäävien kirjainten järjestys täytyy säilyttää ennallaan. Voit olettaa, että molemmat sanat muodostuvat kirjaimista A–Z ja kummassakin sanassa on enintään sata kirjainta.
 */

$word1 = $_REQUEST['sana1'];
$word2 = $_REQUEST['sana2'];

$word2 = str_split($word2);

return preg_match(
    '/' . implode('[A-Z]*', $word2) . '/',
    $word1
) ? '1' : '0';

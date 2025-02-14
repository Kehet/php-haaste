<?php

/*
 * Tehtävä 9: Vokaalijono
 *
 * Vokaalijono on joukko sanan peräkkäisiä vokaaleita. Sanan PUUAINES pisin vokaalijono on UUAI. Tehtävänä on selvittää, kuinka pitkä on annetun sanan pisin vokaalijono. Voit olettaa, että sana muodostuu kirjaimista A–Z ja siinä on korkeintaan sata kirjainta.
 */

$word = $_REQUEST['sana'];

$word = str_split(mb_strtolower($word));

$max = 0;
$counter = 0;
foreach ($word as $letter) {
    if (!in_array($letter, ['a', 'e', 'i', 'o', 'u', 'y', 'ä', 'ö'])) {
        $counter = 0;
        continue;
    }

    $counter++;
    $max = max($max, $counter);
}

return $max;

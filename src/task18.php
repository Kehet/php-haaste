<?php

/*
 * Tehtävä 18: Kirjainmäärät
 *
 * Sanassa PAKKAUS on kaksi A:ta, kaksi K:ta, yksi P, yksi S ja yksi U. Tehtävänä on ilmoittaa kaikki sanassa olevat kirjaimet ja niiden esiintymismäärät. Kirjaimet täytyy luetella aakkosjärjestyksessä. Voit olettaa, että sana muodostuu kirjaimista A–Z ja siinä on korkeintaan 100 kirjainta.
 */

$word = $_REQUEST['sana'];

$letters = array_count_values(str_split($word));

ksort($letters);

return implode(
    "\n",
    array_map(static fn($letter) => $letter . ' ' . $letters[$letter], array_keys($letters))
);

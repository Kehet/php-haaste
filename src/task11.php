<?php

/*
 * Tehtävä 11: Kertotaulu
 *
 * Tehtävänä on tulostaa kertotaulu, jossa vasen sarake sisältää luvut 1–n ja ylin rivi sisältää luvut 1–m. Voit olettaa, että kertotaulussa on korkeintaan tuhat lukua.
 */

$n = $_REQUEST['n'];
$m = $_REQUEST['m'];

$return = [];

for ($i = 1; $i <= $n; $i++) {
    $return[] = range($i, $i * $m, $i);
}

return implode(
    "\n",
    array_map(static fn($row) => implode(" ", $row), $return)
);

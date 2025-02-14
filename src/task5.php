<?php

declare(strict_types=1);

/*
 * Tehtävä 5: Pienin ja suurin
 *
 * Luvuista 3, 5, 2, 1 ja 3 pienin on 1 ja suurin on 5. Tehtävänä on etsiä pienin ja suurin luku annetuista luvuista. Voit olettaa, että lukuja on korkeintaan sata ja jokainen luku on positiivinen kokonaisluku ja alle miljoona.
 */

$luvut = explode('|', $_REQUEST['luvut']);

return min($luvut) . ' ' . max($luvut);

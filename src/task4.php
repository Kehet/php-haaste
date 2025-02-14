<?php

declare(strict_types=1);

/*
 * Tehtävä 4: Lukujen summa
 *
 * Tässä tehtävässä täytyy laskea yhteen annetut luvut. Esimerkiksi jos luvut ovat 3, 8 ja 4, niiden summa on 15. Luvut ovat positiivisia kokonaislukuja, ja niiden summa on alle miljoona.
 */


$luvut = explode('|', $_REQUEST['luvut']);

return array_reduce($luvut, static function ($carry, $item) {
    return $carry + $item;
}, 0);

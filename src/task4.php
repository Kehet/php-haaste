<?php

/*
 * Tässä tehtävässä täytyy laskea yhteen annetut luvut. Esimerkiksi jos luvut ovat 3, 8 ja 4, niiden summa on 15. Luvut ovat positiivisia kokonaislukuja, ja niiden summa on alle miljoona.
 */

assertTrue(isset($_REQUEST['luvut']));

$luvut = explode('|', $_REQUEST['luvut']);

assertTrue(count($luvut) <= 100);

echo array_reduce($luvut, static function ($carry, $item) {
    return $carry + $item;
}, 0);

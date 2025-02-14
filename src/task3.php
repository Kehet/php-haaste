<?php

/*
 * Luku 12 on parillinen, kun taas luku 11 on pariton. Tehtävänä on selvittää, onko luku parillinen vai pariton. Voit olettaa, että luku on positiivinen kokonaisluku ja korkeintaan miljardi.
 */

assertTrue(isset($_REQUEST['luku']));

$luku = $_REQUEST['luku'];

assertTrue(is_numeric($luku) && $luku > 0 && $luku < 1_000_000_000);

echo $luku % 2 === 0 ? 'parillinen' : 'pariton';

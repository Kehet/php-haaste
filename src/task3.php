<?php

declare(strict_types=1);

/*
 * Tehtävä 3: Parillinen vai pariton?
 *
 * Luku 12 on parillinen, kun taas luku 11 on pariton. Tehtävänä on selvittää, onko luku parillinen vai pariton. Voit olettaa, että luku on positiivinen kokonaisluku ja korkeintaan miljardi.
 */


$luku = $_REQUEST['luku'];

return $luku % 2 === 0 ? 'parillinen' : 'pariton';

<?php

declare(strict_types=1);

/*
 * Tehtävä 2: Salasana
 *
 * Järjestelmän käyttäjän tunnus on admin ja salasana on sala123. Tehtävänä on tarkistaa, ovatko käyttäjän tunnus ja salasana oikein. Jos tunnus ja salasana ovat oikein, skriptin täytyy tulostaa viesti OK. Muuten skriptin täytyy tulostaa viesti VIRHE.
 */

$tunnus = $_REQUEST['tunnus'];
$salasana = $_REQUEST['salasana'];

if ($tunnus === 'admin' && $salasana === 'sala123') {
    return 'OK';
}

return 'VIRHE';

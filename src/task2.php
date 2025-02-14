<?php

/*
 * Järjestelmän käyttäjän tunnus on admin ja salasana on sala123. Tehtävänä on tarkistaa, ovatko käyttäjän tunnus ja salasana oikein. Jos tunnus ja salasana ovat oikein, skriptin täytyy tulostaa viesti OK. Muuten skriptin täytyy tulostaa viesti VIRHE.
 */

assertTrue(isset($_REQUEST['tunnus']));
assertTrue(isset($_REQUEST['salasana']));

$tunnus = $_REQUEST['tunnus'];
$salasana = $_REQUEST['salasana'];

if ($tunnus === 'admin' && $salasana === 'sala123') {
    echo 'OK';
} else {
    echo 'VIRHE';
}

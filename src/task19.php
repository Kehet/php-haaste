<?php

/*
 * Tehtävä 19: Neliöjuuri
 *
 * Luvun 81 neliöjuuri 9 on kokonaisluku, mutta luvun 82 neliöjuuri 9,055385... ei ole kokonaisluku. Tehtävänä on selvittää, onko annetun kokonaisluvun neliöjuuri kokonaisluku. Voit olettaa, että luku on korkeintaan miljardi.
 */

$number = $_REQUEST['luku'];

$sqrt = sqrt($number);

return $sqrt == (int)$sqrt ? '1' : '0';

<?php

/*
 * Tehtävä 15: Äänestyskone
 *
 * Toteuta äänestyskone neljälle äänestäjälle. Yksi äänestäjistä on puheenjohtaja, jonka ääni ratkaisee, mikäli äänet menevät tasan.
 *
 * Esimerkki 1: Puheenjohtaja äänestää asian puolesta ja muut äänestävät asiaa vastaan. Äänestystulos on asiaa vastaan, koska kolme henkilöä äänestää asiaa vastaan ja vain yksi sen puolesta.
 *
 * Esimerkki 2: Puheenjohtaja ja 2. äänestäjä äänestävät asian puolesta ja 1. äänestäjä ja 3. äänestäjä äänestävät asiaa vastaan. Äänestystulos on asian puolesta, koska äänet menevät tasan ja puheenjohtaja äänestää asian puolesta.
 *
 * Syötteessä numero 1 tarkoittaa asian puolesta ja numero 0 asiaa vastaan.
 */

$pj = $_REQUEST['pj'];
$a = $_REQUEST['a'];
$b = $_REQUEST['b'];
$c = $_REQUEST['c'];

$votes = array_sum([$pj, $a, $b, $c]);

if ($votes === 2) {
    return $pj;
}

return $votes > 2 ? '1' : '0';

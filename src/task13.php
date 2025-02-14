<?php

/*
 * Tehtävä 13: Palindromi
 *
 * Sana on palindromi, jos se on sama alusta loppuun ja lopusta alkuun luettuna. Esimerkiksi sanat ENNE ja SYTYTYS ovat palindromeja. Tehtävänä on tarkistaa, onko annettu sana palindromi. Voit olettaa, että sana muodostuu kirjaimista A–Z ja siinä on korkeintaan sata kirjainta.
 */

$word = $_REQUEST['sana'];

$letters = str_split(mb_strtolower($word));

for ($i = 0; $i < count($letters) / 2; $i++) {
    if($letters[$i] !== $letters[count($letters) - $i - 1]) {
        return '0';
    }
}

return '1';

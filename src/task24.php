<?php

/*
 * Tehtävä 24: ROT13-salaus
 *
 * Tässä tehtävässä tutkitaan sanoja, jotka muodostuvat kirjaimista A–Z. ROT13-salauksessa jokaista sanan kirjainta siirretään 13 askelta eteenpäin aakkosissa:
 *
 * lähtö A B C D E F G H I J K L M N O P Q R S T U V W X Y Z
 * tulos N O P Q R S T U V W X Y Z A B C D E F G H I J K L M
 *
 * Esimerkiksi sana SALAISUUS muuttuu muotoon FNYNVFHHF. Jos ROT13-salauksen suorittaa kahdesti, sana ei muutu mitenkään, koska kirjaimia A–Z on 26.
 *
 * Tehtävänä on kohdistaa ROT13-salaus annettuun sanaan. Voit olettaa, että sanassa on korkeintaan sata kirjainta.
 */

$word = $_REQUEST['sana'];

$word = mb_strtoupper($word);

return strtr(
    $word,
    'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
    'NOPQRSTUVWXYZABCDEFGHIJKLM'
);

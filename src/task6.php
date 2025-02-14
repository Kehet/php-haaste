<?php

/*
 * Jos vuosi on karkausvuosi, siinä on 366 päivää tavallisen 365:n sijasta. Vuosi on karkausvuosi, jos se on jaollinen 4:llä. Kuitenkin jos vuosi on jaollinen 100:lla, se on karkausvuosi vain, jos se on jaollinen myös 400:lla. Esimerkiksi vuodet 2009, 2010 ja 2011 eivät ole karkausvuosia mutta vuosi 2012 on. Vastaavasti vuodet 2100, 2200 ja 2300 eivät ole karkausvuosia mutta vuosi 2400 on.
 *
 * Tehtävänä on tarkistaa, onko annettu vuosi karkausvuosi. Voit olettaa, että vuosi on välillä 1600–3000.
 */

assertTrue(isset($_REQUEST['vuosi']));

$vuosi = $_REQUEST['vuosi'];

assertTrue(is_numeric($vuosi) && $vuosi >= 1600 && $vuosi <= 3000);

echo $vuosi % 4 === 0 && ($vuosi % 100 !== 0 || $vuosi % 400 === 0) ? '1' : '0';

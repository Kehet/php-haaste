<?php

declare(strict_types=1);

/*
 * Tehtävä 1: Tervetuloa!
 *
 * PHP-haaste sisältää 100 tehtävää, jotka opettavat PHP-ohjelmointia. Tehtävissä käsitellään monipuolisesti ohjelmoinnin tärkeimpiä asioita: muuttujia, taulukoita, ehtolauseita, silmukoita ja funktioita. Tehtävien vaikeusaste kasvaa vähitellen: ensimmäiset tehtävät ovat suoraviivaisia ohjelmointiharjoituksia, kun taas vaikeimpien tehtävien ratkaiseminen vaatii syvällistä ohjelmointitaitoa. PHP-haasteen läpäissyt saa sertifikaatin taitojensa todisteeksi.
 *
 * Tehtävien ratkaisemiseksi tarvitset julkisen palvelimen, jolle voit lähettää PHP-tiedostoja. Kun ilmoitat ratkaisusi sisältävän tiedoston sijainnin, PHP-haaste ottaa yhteyden palvelimeesi ja pyrkii tarkistamaan, että ratkaisusi toimii oikein. Kaikissa tehtävissä syötetiedot ovat saatavilla $_REQUEST-taulukosta ja tehtävän vastaus täytyy tulostaa sivulle.
 *
 * Tämän ensimmäisen tehtävän tarkoituksena on opettaa järjestelmän käyttöä. Kysymys kuuluu: mikä on kahden luvun summa? Esimerkiksi jos luvut ovat 2 ja 3, summa on 2 + 3 = 5. Tehtävänä on luoda PHP-skripti, jolle annetaan kaksi lukua ja joka laskee luvut yhteen ja tulostaa vastauksen. Toisin sanoen skriptin täytyy pystyä laskemaan kahden luvun summa ja $_REQUEST-taulukossa kerrotaan, mitkä nämä luvut kulloinkin ovat.
 *
 * Voit olettaa, että luvut ovat positiivisia kokonaislukuja ja niiden summa on alle miljoona.
 */

$a = $_REQUEST['a'];
$b = $_REQUEST['b'];

return $a + $b;

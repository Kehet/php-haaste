<?php

declare(strict_types=1);

/*
 * Tehtävä 8: Vokaalit ja konsonantit
 *
 * Sanassa SYYSMAISEMA on kuusi vokaalia ja viisi konsonanttia. Tehtävänä on selvittää, kuinka monta vokaalia ja konsonanttia on annetussa sanassa. Voit olettaa, että sana muodostuu kirjaimista A–Z ja siinä on korkeintaan sata kirjainta.
 */

$sana = $_REQUEST['sana'];

$sana = str_split(mb_strtolower($sana));

$vocals = count(array_filter($sana, static function ($item) {
    return in_array($item, ['a', 'e', 'i', 'o', 'u', 'y', 'ä', 'ö']);
}));

return $vocals . ' ' . (count($sana) - $vocals);

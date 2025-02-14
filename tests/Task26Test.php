<?php

namespace tests;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class Task26Test extends TestCase
{

    public static function data(): array
    {
        return [
            ['sana1' => 'TALO', 'sana2' => 'LATO', 'result' => '1'],
            ['sana1' => 'VALO', 'sana2' => 'LOVI', 'result' => '0'],
            ['sana1' => 'AJATUS', 'sana2' => 'AATU', 'result' => '0'],
            ['sana1' => 'OHJELMOINTIPUTKA', 'sana2' => 'KOTIPIHOJENMULTA', 'result' => '1'],
            ['sana1' => 'OHJELMOINTIPUTKA', 'sana2' => 'KOTIPIHAJENMULTA', 'result' => '0'],
            ['sana1' => 'AAAAA', 'sana2' => 'AAAAA', 'result' => '1'],
            ['sana1' => 'ABABAB', 'sana2' => 'BABABA', 'result' => '1'],
            ['sana1' => 'AAAAA', 'sana2' => 'AAAAAA', 'result' => '0'],
            ['sana1' => 'JKHGKSFSKGSJDFSGKJ', 'sana2' => 'DSKKJASGKJASDG', 'result' => '0'],
            ['sana1' => 'ENNE', 'sana2' => 'ENNE', 'result' => '1'],
            ['sana1' => 'SANELURATKAISU', 'sana2' => 'SEURAKUNTASALI', 'result' => '1'],
            ['sana1' => 'ANTOISA', 'sana2' => 'ASIATON', 'result' => '1'],
            ['sana1' => 'VAIKUTUS', 'sana2' => 'AIKUTUSVA', 'result' => '0'],
        ];
    }

    #[DataProvider('data')]
    public function testItWorks($sana1, $sana2, $result): void
    {
        $_REQUEST = compact('sana1', 'sana2');

        $return = require __DIR__ . '/../src/task26.php';

        $this->assertEquals($result, $return);
    }

}

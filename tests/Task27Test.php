<?php

namespace tests;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class Task27Test extends TestCase
{

    public static function data(): array
    {
        return [
            ['sana1' => 'TESTI', 'sana2' => 'TE', 'result' => '1'],
            ['sana1' => 'TESTI', 'sana2' => 'TI', 'result' => '1'],
            ['sana1' => 'TESTI', 'sana2' => 'E', 'result' => '1'],
            ['sana1' => 'TESTI', 'sana2' => 'SE', 'result' => '0'],
            ['sana1' => 'TESTI', 'sana2' => 'K', 'result' => '0'],
            ['sana1' => 'TESTI', 'sana2' => 'TST', 'result' => '1'],
            ['sana1' => 'TESTI', 'sana2' => 'TSI', 'result' => '1'],
            ['sana1' => 'TESTI', 'sana2' => 'ETI', 'result' => '1'],
            ['sana1' => 'TESTI', 'sana2' => 'EE', 'result' => '0'],
            ['sana1' => 'TESTI', 'sana2' => 'TESTI', 'result' => '1'],
            ['sana1' => 'TESTI', 'sana2' => 'TESTIS', 'result' => '0'],
            ['sana1' => 'ESIMERKKI', 'sana2' => 'SEI', 'result' => '1'],
            ['sana1' => 'ESIMERKKI', 'sana2' => 'SIENI', 'result' => '0'],
            ['sana1' => 'AAABBB', 'sana2' => 'BA', 'result' => '0'],
            ['sana1' => 'AAA', 'sana2' => 'AB', 'result' => '0'],
            ['sana1' => 'AAA', 'sana2' => 'BA', 'result' => '0'],
            ['sana1' => 'AAA', 'sana2' => 'AAAAAA', 'result' => '0'],
        ];
    }

    #[DataProvider('data')]
    public function testItWorks($sana1, $sana2, $result): void
    {
        $_REQUEST = compact('sana1', 'sana2');

        $return = require __DIR__ . '/../src/task27.php';

        $this->assertEquals($result, $return);
    }

}

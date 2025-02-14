<?php

namespace tests;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class Task28Test extends TestCase
{

    public static function data(): array
    {
        return [
            ['sana' => 'TESTI', 'suunta' => 'V', 'maara' => '1', 'result' => 'ESTIT'],
            ['sana' => 'TESTI', 'suunta' => 'V', 'maara' => '2', 'result' => 'STITE'],
            ['sana' => 'TESTI', 'suunta' => 'V', 'maara' => '3', 'result' => 'TITES'],
            ['sana' => 'TESTI', 'suunta' => 'V', 'maara' => '4', 'result' => 'ITEST'],
            ['sana' => 'TESTI', 'suunta' => 'V', 'maara' => '5', 'result' => 'TESTI'],
            ['sana' => 'TESTI', 'suunta' => 'V', 'maara' => '6', 'result' => 'ESTIT'],
            ['sana' => 'TESTI', 'suunta' => 'O', 'maara' => '1', 'result' => 'ITEST'],
            ['sana' => 'TESTI', 'suunta' => 'O', 'maara' => '2', 'result' => 'TITES'],
            ['sana' => 'TESTI', 'suunta' => 'O', 'maara' => '3', 'result' => 'STITE'],
            ['sana' => 'TESTI', 'suunta' => 'O', 'maara' => '4', 'result' => 'ESTIT'],
            ['sana' => 'TESTI', 'suunta' => 'O', 'maara' => '5', 'result' => 'TESTI'],
            ['sana' => 'TESTI', 'suunta' => 'O', 'maara' => '6', 'result' => 'ITEST'],
            ['sana' => 'OHJELMOINTIPUTKA', 'suunta' => 'V', 'maara' => '3', 'result' => 'ELMOINTIPUTKAOHJ'],
            ['sana' => 'OHJELMOINTIPUTKA', 'suunta' => 'O', 'maara' => '123', 'result' => 'MOINTIPUTKAOHJEL'],
            ['sana' => 'OHJELMOINTIPUTKA', 'suunta' => 'V', 'maara' => '577', 'result' => 'HJELMOINTIPUTKAO'],
            ['sana' => 'OHJELMOINTIPUTKA', 'suunta' => 'O', 'maara' => '768', 'result' => 'OHJELMOINTIPUTKA'],
        ];
    }

    #[DataProvider('data')]
    public function testItWorks($sana, $suunta, $maara, $result): void
    {
        $_REQUEST = compact('sana', 'suunta', 'maara');

        $return = require __DIR__ . '/../src/task28.php';

        $this->assertEquals($result, $return);
    }

}

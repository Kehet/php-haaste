<?php

namespace tests;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class Task29Test extends TestCase
{

    public static function data(): array
    {
        return [
            ['sana1' => 'TESTI', 'sana2' => 'TESTI', 'result' => '1'],
            ['sana1' => 'TESTI', 'sana2' => 'ESTIT', 'result' => '1'],
            ['sana1' => 'TESTI', 'sana2' => 'STITE', 'result' => '1'],
            ['sana1' => 'TESTI', 'sana2' => 'TITES', 'result' => '1'],
            ['sana1' => 'TESTI', 'sana2' => 'ITEST', 'result' => '1'],
            ['sana1' => 'TESTI', 'sana2' => 'STI', 'result' => '0'],
            ['sana1' => 'TESTI', 'sana2' => 'TEST', 'result' => '0'],
            ['sana1' => 'TESTI', 'sana2' => 'ITSET', 'result' => '0'],
            ['sana1' => 'TESTI', 'sana2' => 'TESTT', 'result' => '0'],
            ['sana1' => 'TESTI', 'sana2' => 'STIET', 'result' => '0'],
            ['sana1' => 'OHJELMOINTIPUTKA', 'sana2' => 'ELMOINTIPUTKAOHJ', 'result' => '1'],
            ['sana1' => 'OHJELMOINTIPUTKA', 'sana2' => 'TIPUTKAOHJELMOI', 'result' => '0'],
        ];
    }

    #[DataProvider('data')]
    public function testItWorks($sana1, $sana2, $result): void
    {
        $_REQUEST = compact('sana1', 'sana2');

        $return = require __DIR__ . '/../src/task29.php';

        $this->assertEquals($result, $return);
    }

}

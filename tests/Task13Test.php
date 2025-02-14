<?php

namespace tests;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class Task13Test extends TestCase
{

    public static function data(): array
    {
        return [
            ['sana' => 'TESTI', 'result' => '0'],
            ['sana' => 'OTTO', 'result' => '1'],
            ['sana' => 'AUTIOITUA', 'result' => '1'],
            ['sana' => 'AUTIOOTUA', 'result' => '0'],
            ['sana' => 'INNOSTUNUTSONNI', 'result' => '1'],
            ['sana' => 'SAIPPUAKAUPPIAS', 'result' => '1'],
            ['sana' => 'SAIPPUAKIVIKAUPPIAS', 'result' => '1'],
            ['sana' => 'RELIEFPFEILER', 'result' => '1'],
            ['sana' => 'EIOLEPALINDROMI', 'result' => '0'],
            ['sana' => 'AABBCCCCBBAA', 'result' => '1'],
            ['sana' => 'AABBCCDCBBAA', 'result' => '0'],
            ['sana' => 'AAAAAAAAAAAAAAAAAAAA', 'result' => '1'],
        ];
    }

    #[DataProvider('data')]
    public function testItWorks($sana, $result): void
    {
        $_REQUEST = compact('sana');

        $return = require __DIR__ . '/../src/task13.php';

        $this->assertEquals($result, $return);
    }

}

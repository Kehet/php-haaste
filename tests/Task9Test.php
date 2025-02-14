<?php

namespace tests;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class Task9Test extends TestCase
{

    public static function data(): array
    {
        return [
            ['sana' => 'TESTI', 'result' => '1'],
            ['sana' => 'OHJELMOINTI', 'result' => '2'],
            ['sana' => 'AJATUS', 'result' => '1'],
            ['sana' => 'AIE', 'result' => '3'],
            ['sana' => 'SYYSMYRSKY', 'result' => '2'],
            ['sana' => 'VAPAA', 'result' => '2'],
            ['sana' => 'VAIETA', 'result' => '3'],
            ['sana' => 'SAIPPUAKAUPPIAS', 'result' => '2'],
            ['sana' => 'UKKO', 'result' => '1'],
            ['sana' => 'SEIS', 'result' => '2'],
            ['sana' => 'HUOMAUTUS', 'result' => '2'],
            ['sana' => 'BAABAAABAAAAB', 'result' => '4'],
            ['sana' => 'BAAAABAAABAAB', 'result' => '4'],
            ['sana' => 'AAAAAAAAAA', 'result' => '10'],
            ['sana' => 'KAEAEAEAEAEKAEAEK', 'result' => '10'],
        ];
    }

    #[DataProvider('data')]
    public function testItWorks($sana, $result): void
    {
        $_REQUEST = compact('sana');

        $return = require __DIR__ . '/../src/task9.php';

        $this->assertEquals($result, $return);
    }

}

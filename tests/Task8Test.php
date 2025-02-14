<?php

namespace tests;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class Task8Test extends TestCase
{

    public static function data(): array
    {
        return [
            ['sana' => 'TESTI', 'result' => '2 3'],
            ['sana' => 'ARVOITUS', 'result' => '4 4'],
            ['sana' => 'AIE', 'result' => '3 0'],
            ['sana' => 'VR', 'result' => '0 2'],
            ['sana' => 'ALUSSAOLISUOKUOKKAJAJUSSI', 'result' => '13 12'],
        ];
    }

    #[DataProvider('data')]
    public function testItWorks($sana, $result): void
    {
        $_REQUEST = compact('sana');

        $return = require __DIR__ . '/../src/task8.php';

        $this->assertEquals($result, $return);
    }

}

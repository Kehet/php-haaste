<?php

namespace tests;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class Task6Test extends TestCase
{

    public static function data(): array
    {
        return [
            ['vuosi' => '2009', 'result' => '0'],
            ['vuosi' => '2004', 'result' => '1'],
            ['vuosi' => '1998', 'result' => '0'],
            ['vuosi' => '2000', 'result' => '1'],
            ['vuosi' => '1900', 'result' => '0'],
            ['vuosi' => '1904', 'result' => '1'],
            ['vuosi' => '1968', 'result' => '1'],
            ['vuosi' => '2035', 'result' => '0'],
            ['vuosi' => '2400', 'result' => '1'],
            ['vuosi' => '2500', 'result' => '0'],
            ['vuosi' => '2504', 'result' => '1'],
            ['vuosi' => '1600', 'result' => '1'],
            ['vuosi' => '1604', 'result' => '1'],
            ['vuosi' => '1610', 'result' => '0'],
            ['vuosi' => '1700', 'result' => '0'],
            ['vuosi' => '1704', 'result' => '1'],
        ];
    }

    #[DataProvider('data')]
    public function testItWorks($vuosi, $result): void
    {
        $_REQUEST = compact('vuosi');

        $return = require __DIR__ . '/../src/task6.php';

        $this->assertEquals($result, $return);
    }

}

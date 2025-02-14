<?php

namespace tests;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class Task19Test extends TestCase
{

    public static function data(): array
    {
        return [
            ['luku' => '13', 'result' => '0'],
            ['luku' => '14', 'result' => '0'],
            ['luku' => '15', 'result' => '0'],
            ['luku' => '16', 'result' => '1'],
            ['luku' => '17', 'result' => '0'],
            ['luku' => '18', 'result' => '0'],
            ['luku' => '360', 'result' => '0'],
            ['luku' => '361', 'result' => '1'],
            ['luku' => '362', 'result' => '0'],
            ['luku' => '1', 'result' => '1'],
        ];
    }

    #[DataProvider('data')]
    public function testItWorks($luku, $result): void
    {
        $_REQUEST = compact('luku');

        $return = require __DIR__ . '/../src/task19.php';

        $this->assertEquals($result, $return);
    }

}

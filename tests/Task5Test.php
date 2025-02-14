<?php

namespace tests;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class Task5Test extends TestCase
{

    public static function data(): array
    {
        return [
            ['luvut' => '3|2', 'result' => '2 3'],
            ['luvut' => '1|2|3|4|5', 'result' => '1 5'],
            ['luvut' => '4|1|2|5|3', 'result' => '1 5'],
            ['luvut' => '7|2|9', 'result' => '2 9'],
            ['luvut' => '3|9|9|1|3', 'result' => '1 9'],
            ['luvut' => '2|7|9|10|1|7|2|2|66|3', 'result' => '1 66'],
            ['luvut' => '8888|8888', 'result' => '8888 8888'],
            ['luvut' => '12|34|56|111|222|1', 'result' => '1 222'],
        ];
    }

    #[DataProvider('data')]
    public function testItWorks($luvut, $result): void
    {
        $_REQUEST = compact('luvut');

        $return = require __DIR__ . '/../src/task5.php';

        $this->assertEquals($result, $return);
    }

}

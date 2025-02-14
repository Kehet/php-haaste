<?php

namespace tests;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class Task15Test extends TestCase
{

    public static function data(): array
    {
        return [
            ['pj' => '0', 'a' => '1', 'b' => '1', 'c' => '1', 'result' => '1'],
            ['pj' => '1', 'a' => '0', 'b' => '0', 'c' => '0', 'result' => '0'],
            ['pj' => '1', 'a' => '0', 'b' => '0', 'c' => '1', 'result' => '1'],
            ['pj' => '1', 'a' => '0', 'b' => '1', 'c' => '0', 'result' => '1'],
            ['pj' => '1', 'a' => '0', 'b' => '1', 'c' => '1', 'result' => '1'],
            ['pj' => '1', 'a' => '1', 'b' => '0', 'c' => '0', 'result' => '1'],
            ['pj' => '1', 'a' => '1', 'b' => '0', 'c' => '1', 'result' => '1'],
            ['pj' => '1', 'a' => '1', 'b' => '1', 'c' => '0', 'result' => '1'],
            ['pj' => '1', 'a' => '1', 'b' => '1', 'c' => '1', 'result' => '1'],
        ];
    }

    #[DataProvider('data')]
    public function testItWorks($pj, $a, $b, $c, $result): void
    {
        $_REQUEST = compact('pj', 'a', 'b', 'c');

        $return = require __DIR__ . '/../src/task15.php';

        $this->assertEquals($result, $return);
    }

}

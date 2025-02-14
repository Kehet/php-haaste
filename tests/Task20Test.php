<?php

namespace tests;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class Task20Test extends TestCase
{

    public static function data(): array
    {
        return [
            ['n' => '1', 'result' => 0],
            ['n' => '4', 'result' => 2],
            ['n' => '10', 'result' => 34],
            ['n' => '17', 'result' => 987],
            ['n' => '24', 'result' => 28657],
            ['n' => '35', 'result' => 5702887],
            ['n' => '41', 'result' => 102334155],
            ['n' => '44', 'result' => 433494437],
            ['n' => '45', 'result' => 701408733],
        ];
    }

    #[DataProvider('data')]
    public function testItWorks($n, $result): void
    {
        $_REQUEST = compact('n');

        $return = require __DIR__ . '/../src/task20.php';

        $this->assertEquals($result, $return);
    }

}

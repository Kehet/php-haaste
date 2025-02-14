<?php

namespace tests;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class Task21Test extends TestCase
{

    public static function data(): array
    {
        return [
            ['n' => '7', 'result' => '0 1 1 1 1 1 1 1 0 0'],
            ['n' => '34', 'result' => '3 14 14 9 4 3 3 3 3 3'],
            ['n' => '95', 'result' => '9 20 20 20 20 20 19 19 19 15'],
            ['n' => '350', 'result' => '65 175 175 126 75 66 65 65 65 65'],
            ['n' => '779', 'result' => '147 258 258 258 258 258 258 238 148 148'],
            ['n' => '953', 'result' => '185 296 296 296 295 289 285 285 285 239'],
            ['n' => '1', 'result' => '0 1 0 0 0 0 0 0 0 0'],
            ['n' => '2', 'result' => '0 1 1 0 0 0 0 0 0 0'],
            ['n' => '3', 'result' => '0 1 1 1 0 0 0 0 0 0'],
            ['n' => '4', 'result' => '0 1 1 1 1 0 0 0 0 0'],
            ['n' => '5', 'result' => '0 1 1 1 1 1 0 0 0 0'],
            ['n' => '6', 'result' => '0 1 1 1 1 1 1 0 0 0'],
            ['n' => '8', 'result' => '0 1 1 1 1 1 1 1 1 0'],
            ['n' => '9', 'result' => '0 1 1 1 1 1 1 1 1 1'],
            ['n' => '10', 'result' => '1 2 1 1 1 1 1 1 1 1'],
            ['n' => '11', 'result' => '1 4 1 1 1 1 1 1 1 1'],
        ];
    }

    #[DataProvider('data')]
    public function testItWorks($n, $result): void
    {
        $_REQUEST = compact('n');

        $return = require __DIR__ . '/../src/task21.php';

        $this->assertEquals($result, $return);
    }

}

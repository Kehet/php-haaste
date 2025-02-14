<?php

namespace tests;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class Task7Test extends TestCase
{

    public static function data(): array
    {
        return [
            ['n' => '1', 'result' => '1 1'],
            ['n' => '1', 'result' => '1 1'],
            ['n' => '3', 'result' => '6 14'],
            ['n' => '7', 'result' => '28 140'],
            ['n' => '20', 'result' => '210 2870'],
            ['n' => '34', 'result' => '595 13685'],
            ['n' => '49', 'result' => '1225 40425'],
            ['n' => '539', 'result' => '145530 52342290'],
            ['n' => '1222', 'result' => '747253 609011195'],
        ];
    }

    #[DataProvider('data')]
    public function testItWorks($n, $result): void
    {
        $_REQUEST = compact('n');

        $return = require __DIR__ . '/../src/task7.php';

        $this->assertEquals($result, $return);
    }

}

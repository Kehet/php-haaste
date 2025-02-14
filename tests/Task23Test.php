<?php

namespace tests;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class Task23Test extends TestCase
{

    public static function data(): array
    {
        return [
            ['n' => '7', 'result' => 0],
            ['n' => '11', 'result' => 0],
            ['n' => '12', 'result' => 1],
            ['n' => '67', 'result' => 2],
            ['n' => '70', 'result' => 1],
            ['n' => '100', 'result' => 1],
            ['n' => '139', 'result' => 2],
            ['n' => '155', 'result' => 3],
            ['n' => '185', 'result' => 3],
            ['n' => '191', 'result' => 0],
            ['n' => '599', 'result' => 4],
            ['n' => '639', 'result' => 5],
            ['n' => '791', 'result' => 7],
            ['n' => '57874', 'result' => 3],
            ['n' => '578744', 'result' => 4],
            ['n' => '913319', 'result' => 0],
            ['n' => '913324', 'result' => 5],
        ];
    }

    #[DataProvider('data')]
    public function testItWorks($n, $result): void
    {
        $_REQUEST = compact('n');

        $return = require __DIR__ . '/../src/task23.php';

        $this->assertEquals($result, $return);
    }

}

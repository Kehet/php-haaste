<?php

namespace tests;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class Task30Test extends TestCase
{

    public static function data(): array
    {
        return [
            ['n' => '1', 'result' => 3],
            ['n' => '2', 'result' => 1],
            ['n' => '4', 'result' => 2],
            ['n' => '10', 'result' => 6],
            ['n' => '27', 'result' => 111],
            ['n' => '60', 'result' => 19],
            ['n' => '578', 'result' => 30],
            ['n' => '999', 'result' => 49],
            ['n' => '1113', 'result' => 137],
            ['n' => '5840', 'result' => 98],
            ['n' => '78023', 'result' => 200],
            ['n' => '637281', 'result' => 141],
            ['n' => '1330330', 'result' => 155],
            ['n' => '3782387', 'result' => 340],
            ['n' => '252990338', 'result' => 178],
            ['n' => '789879232', 'result' => 110],
        ];
    }

    #[DataProvider('data')]
    public function testItWorks($n, $result): void
    {
        $_REQUEST = compact('n');

        $return = require __DIR__ . '/../src/task30.php';

        $this->assertEquals($result, $return);
    }

}

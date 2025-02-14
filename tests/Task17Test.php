<?php

namespace tests;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class Task17Test extends TestCase
{

    public static function data(): array
    {
        return [
            ['n' => '3', 'luvut' => '1|3', 'result' => 2],
            ['n' => '5', 'luvut' => '1|2|3|4', 'result' => 5],
            ['n' => '5', 'luvut' => '1|4|2|3', 'result' => 5],
            ['n' => '5', 'luvut' => '1|3|5|2', 'result' => 4],
            ['n' => '10', 'luvut' => '1|8|2|7|10|9|3|6|4', 'result' => 5],
            ['n' => '10', 'luvut' => '1|8|2|7|5|9|3|6|4', 'result' => 10],
            ['n' => '10', 'luvut' => '1|8|2|7|10|5|3|6|4', 'result' => 9],
            ['n' => '10', 'luvut' => '1|8|2|5|10|9|3|6|4', 'result' => 7],
            ['n' => '10', 'luvut' => '5|8|2|7|10|9|3|6|4', 'result' => 1],
            ['n' => '10', 'luvut' => '1|8|2|7|10|9|3|6|5', 'result' => 4],
        ];
    }

    #[DataProvider('data')]
    public function testItWorks($n, $luvut, $result): void
    {
        $_REQUEST = compact('n', 'luvut');

        $return = require __DIR__ . '/../src/task17.php';

        $this->assertEquals($result, $return);
    }

}

<?php

namespace tests;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class Task25Test extends TestCase
{

    public static function data(): array
    {
        return [
            ['luvut' => '1|2|3', 'result' => 1],
            ['luvut' => '5|7|5', 'result' => 0],
            ['luvut' => '3|8', 'result' => 5],
            ['luvut' => '2|20|4|18|6|16', 'result' => 2],
            ['luvut' => '5|5|5|5|5|5|5|5', 'result' => 0],
            ['luvut' => '78|13|155|94|52|66|32|89', 'result' => 5],
            ['luvut' => '1000|10000|100000', 'result' => 9000],
        ];
    }

    #[DataProvider('data')]
    public function testItWorks($luvut, $result): void
    {
        $_REQUEST = compact('luvut');

        $return = require __DIR__ . '/../src/task25.php';

        $this->assertEquals($result, $return);
    }

}

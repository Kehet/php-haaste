<?php

namespace tests;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class Task16Test extends TestCase
{

    public static function data(): array
    {
        return [
            ['luvut' => '1|2|3', 'result' => '1'],
            ['luvut' => '3|8|10|17', 'result' => '1'],
            ['luvut' => '4|5|5|5', 'result' => '1'],
            ['luvut' => '3|8|5|9|10', 'result' => '0'],
            ['luvut' => '7|3|5|9|11', 'result' => '0'],
            ['luvut' => '3|8|9|5', 'result' => '0'],
            ['luvut' => '2|4|29|35|77|100|155', 'result' => '1'],
            ['luvut' => '3|9|10|66|66|99|99|100|155', 'result' => '1'],
            ['luvut' => '3|3|3|3|3|3|3|3|3|3|3|3|3|3', 'result' => '1'],
            ['luvut' => '1|11|1', 'result' => '0'],
        ];
    }

    #[DataProvider('data')]
    public function testItWorks($luvut, $result): void
    {
        $_REQUEST = compact('luvut');

        $return = require __DIR__ . '/../src/task16.php';

        $this->assertEquals($result, $return);
    }

}

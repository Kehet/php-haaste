<?php

namespace tests;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class Task14Test extends TestCase
{

    public static function data(): array
    {
        return [
            ['num1' => '2|8|16|17|26|32|39', 'num2' => '3|8|17|20|31|35|37', 'result' => 2],
            ['num1' => '1|2|3|4|5|6|7', 'num2' => '1|2|3|4|5|6|7', 'result' => 7],
            ['num1' => '1|2|3|4|5|6|7', 'num2' => '8|9|10|11|12|13|14', 'result' => 0],
            ['num1' => '1|2|3|4|5|6|7', 'num2' => '1|3|5|7|9|11|13', 'result' => 4],
            ['num1' => '1|2|8|9|14|20|25', 'num2' => '3|7|8|13|19|21|39', 'result' => 1],
            ['num1' => '1|2|8|9|14|20|39', 'num2' => '3|7|8|13|19|21|39', 'result' => 2],
            ['num1' => '15|17|18|24|31|35|36', 'num2' => '5|9|10|11|15|17|24', 'result' => 3],
            ['num1' => '15|17|18|24|31|35|36', 'num2' => '5|9|10|11|15|19|24', 'result' => 2],
        ];
    }

    #[DataProvider('data')]
    public function testItWorks($num1, $num2, $result): void
    {
        $_REQUEST = compact('num1', 'num2');

        $return = require __DIR__ . '/../src/task14.php';

        $this->assertEquals($result, $return);
    }

}

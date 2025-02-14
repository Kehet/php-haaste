<?php

namespace tests;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class Task12Test extends TestCase
{

    public static function data(): array
    {
        return [
            ['luvut' => '1|2|3', 'result' => '0'],
            ['luvut' => '1|2|3|1', 'result' => '1'],
            ['luvut' => '1|2|3|1|2', 'result' => '1'],
            ['luvut' => '1|2|3|2', 'result' => '1'],
            ['luvut' => '2|3|1', 'result' => '0'],
            ['luvut' => '2|3|1', 'result' => '0'],
            ['luvut' => '88|9|80|7|72|35|91|26|83|24|82|3|26|90|16|29|89|6|83|18', 'result' => '1'],
            ['luvut' => '99|19|17|89|44|62|79|55|14|72|7|21|91|39|39|53|36|10|40|40', 'result' => '1'],
            ['luvut' => '65|19|24|56|85|11|13|14|53|6|62|93|67|36|77|52|7|94|91|73', 'result' => '0'],
        ];
    }

    #[DataProvider('data')]
    public function testItWorks($luvut, $result): void
    {
        $_REQUEST = compact('luvut');

        $return = require __DIR__ . '/../src/task12.php';

        $this->assertEquals($result, $return);
    }

}

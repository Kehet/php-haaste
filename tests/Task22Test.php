<?php

namespace tests;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class Task22Test extends TestCase
{

    public static function data(): array
    {
        return [
            ['nelio' => '1|15|14|4|12|6|7|9|8|10|11|5|13|3|2|16', 'result' => '1'],
            ['nelio' => '8|9|8|9|8|9|8|9|9|8|9|8|9|8|9|8', 'result' => '0'],
        ];
    }

    #[DataProvider('data')]
    public function testItWorks($nelio, $result): void
    {
        $_REQUEST = compact('nelio');

        $return = require __DIR__ . '/../src/task22.php';

        $this->assertEquals($result, $return);
    }

}

<?php

namespace tests;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class Task1Test extends TestCase
{

    public static function data(): array
    {
        return [
            ['a' => '1', 'b' => '1', 'result' => '2'],
            ['a' => '2', 'b' => '6', 'result' => '8'],
            ['a' => '153', 'b' => '200', 'result' => '353'],
            ['a' => '5322', 'b' => '5', 'result' => '5327'],
            ['a' => '37812', 'b' => '55298', 'result' => '93110'],
            ['a' => '60', 'b' => '60', 'result' => '120'],
            ['a' => '17', 'b' => '1000', 'result' => '1017'],
        ];
    }

    #[DataProvider('data')]
    public function testItWorks($a, $b, $result): void
    {
        $_REQUEST = compact('a', 'b');

        $return = require __DIR__ . '/../src/task1.php';

        $this->assertEquals($result, $return);
    }

}

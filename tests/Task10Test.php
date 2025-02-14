<?php

namespace tests;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class Task10Test extends TestCase
{

    public static function data(): array
    {
        return [
            ["n" => "1", 'result' => '1'],
            ["n" => "2", 'result' => '2'],
            ["n" => "3", 'result' => '6'],
            ["n" => "4", 'result' => '24'],
            ["n" => "5", 'result' => '120'],
            ["n" => "0", 'result' => '1'],
            ["n" => "10", 'result' => '3628800'],
            ["n" => "12", 'result' => '479001600'],
        ];
    }

    #[DataProvider('data')]
    public function testItWorks($n, $result): void
    {
        $_REQUEST = compact('n');

        $return = require __DIR__ . '/../src/task10.php';

        $this->assertEquals($result, $return);
    }

}

<?php

namespace tests;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class Task3Test extends TestCase
{

    public static function data(): array
    {
        return [
            ['luku' => '1254287', 'result' => 'pariton'],
            ['luku' => '1254287', 'result' => 'pariton'],
            ['luku' => '12542878', 'result' => 'parillinen'],
            ['luku' => '158564', 'result' => 'parillinen'],
            ['luku' => '1', 'result' => 'pariton'],
            ['luku' => '436', 'result' => 'parillinen'],
            ['luku' => '38', 'result' => 'parillinen'],
            ['luku' => '223', 'result' => 'pariton'],
            ['luku' => '800', 'result' => 'parillinen'],
            ['luku' => '51', 'result' => 'pariton'],
            ['luku' => '101', 'result' => 'pariton'],
            ['luku' => '2222', 'result' => 'parillinen'],
        ];
    }

    #[DataProvider('data')]
    public function testItWorks($luku, $result): void
    {
        $_REQUEST = compact('luku');

        $return = require __DIR__ . '/../src/task3.php';

        $this->assertEquals($result, $return);
    }

}

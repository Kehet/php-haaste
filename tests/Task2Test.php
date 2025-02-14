<?php

namespace tests;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class Task2Test extends TestCase
{

    public static function data(): array
    {
        return [
            ['tunnus' => 'admin', 'salasana' => 'sala123', 'result' => 'OK'],
            ['tunnus' => 'admin', 'salasana' => 'koira', 'result' => 'VIRHE'],
            ['tunnus' => 'sepe', 'salasana' => 'sala123', 'result' => 'VIRHE'],
            ['tunnus' => 'sepe', 'salasana' => 'vuohi', 'result' => 'VIRHE'],
            ['tunnus' => 'sala123', 'salasana' => 'admin', 'result' => 'VIRHE'],
            ['tunnus' => 'admin', 'salasana' => 'sala123', 'result' => 'OK'],
        ];
    }

    #[DataProvider('data')]
    public function testItWorks($tunnus, $salasana, $result): void
    {
        $_REQUEST = compact('tunnus', 'salasana');

        $return = require __DIR__ . '/../src/task2.php';

        $this->assertEquals($result, $return);
    }

}

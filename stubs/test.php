<?php

namespace tests;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class TaskXXXXXTest extends TestCase
{

    public static function data(): array
    {
        return [

        ];
    }

    #[DataProvider('data')]
    public function testItWorks($a, $b, $result): void
    {
        $_REQUEST = compact('a', 'b');

        $return = require __DIR__ . '/../src/taskXXXXX.php';

        $this->assertEquals($result, $return);
    }

}

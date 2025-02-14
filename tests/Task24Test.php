<?php

namespace tests;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class Task24Test extends TestCase
{

    public static function data(): array
    {
        return [
            ['sana' => 'TESTI', 'result' => 'GRFGV'],
            ['sana' => 'OHJELMOINTIPUTKA', 'result' => 'BUWRYZBVAGVCHGXN'],
            ['sana' => 'MYSTEERI', 'result' => 'ZLFGRREV'],
            ['sana' => 'SAIPPUAKAUPPIAS', 'result' => 'FNVCCHNXNHCCVNF'],
            ['sana' => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ', 'result' => 'NOPQRSTUVWXYZABCDEFGHIJKLM'],
        ];
    }

    #[DataProvider('data')]
    public function testItWorks($sana, $result): void
    {
        $_REQUEST = compact('sana');

        $return = require __DIR__ . '/../src/task24.php';

        $this->assertEquals($result, $return);
    }

}

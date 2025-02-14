<?php

namespace tests;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class Task18Test extends TestCase
{

    public static function data(): array
    {
        return [
            ['sana' => 'ABC', 'result' => "A 1\nB 1\nC 1"],
            ['sana' => 'AAAAA', 'result' => "A 5"],
            ['sana' => 'AAEE', 'result' => "A 2\nE 2"],
            ['sana' => 'TESTI', 'result' => "E 1\nI 1\nS 1\nT 2"],
            ['sana' => 'PUTKA', 'result' => "A 1\nK 1\nP 1\nT 1\nU 1"],
            ['sana' => 'VAKAVA', 'result' => "A 3\nK 1\nV 2"],
            [
                'sana'   => 'OHJELMOINTIPUTKA',
                'result' => "A 1\nE 1\nH 1\nI 2\nJ 1\nK 1\nL 1\nM 1\nN 1\nO 2\nP 1\nT 2\nU 1",
            ],
            ['sana' => 'SAIPPUAKIVIKAUPPIAS', 'result' => "A 4\nI 4\nK 2\nP 4\nS 2\nU 2\nV 1"],
        ];
    }

    #[DataProvider('data')]
    public function testItWorks($sana, $result): void
    {
        $_REQUEST = compact('sana');

        $return = require __DIR__ . '/../src/task18.php';

        $this->assertEquals($result, $return);
    }

}

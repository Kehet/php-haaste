<?php

namespace tests;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class Task4Test extends TestCase
{

    public static function data(): array
    {
        return [
            ['luvut' => '1|3', 'result' => '4'],
            ['luvut' => '7|5|3|9', 'result' => '24'],
            ['luvut' => '1|10|100|1000|10000', 'result' => '11111'],
            ['luvut' => '1|9|2|8|3|7|4|6|5', 'result' => '45'],
            [
                'luvut'  => '89|854|213|611|683|603|625|648|998|631|877|141|28|266|42|677|573|422|448|90',
                'result' => '9519',
            ],
            [
                'luvut'  => '625|512|444|307|423|897|196|577|290|519|915|915|32|268|990|973|263|619|59|646',
                'result' => '10470',
            ],
            [
                'luvut'  => '496|321|750|187|393|159|896|24|309|384|553|301|986|78|545|355|976|901|950|771',
                'result' => '10335',
            ],
            [
                'luvut'  => '389|922|102|660|379|983|79|506|770|283|12|455|930|28|351|970|35|4|797|762',
                'result' => '9417',
            ],
        ];
    }

    #[DataProvider('data')]
    public function testItWorks($luvut, $result): void
    {
        $_REQUEST = compact('luvut');

        $return = require __DIR__ . '/../src/task4.php';

        $this->assertEquals($result, $return);
    }

}

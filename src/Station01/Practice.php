<?php

namespace Src\Station01;

class Practice
{
    public function main(): void
    {
        $a = 1;
        echo gettype($a) . PHP_EOL;
    }
}

(new Practice())->main();

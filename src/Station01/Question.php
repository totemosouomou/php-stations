<?php

namespace Src\Station01;

class Question
{
    public function main(): array
    {
        $a = 1;
        echo gettype($a) . PHP_EOL;

        $b = true;
        echo gettype($b) . PHP_EOL;

        return [$a, $b];
    }
}

(new Question())->main();

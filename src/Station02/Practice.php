<?php

namespace Src\Station02;

class Practice
{
    public function main(): void
    {
        $a = 0;
        $b = null;

        if ($a === $b) {
            echo '等しい' . PHP_EOL;
        } else {
            echo '等しくない' . PHP_EOL;
        }
    }
}

(new Practice())->main();

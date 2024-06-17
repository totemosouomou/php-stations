<?php

namespace Src\Station10;

class Practice
{
    public function main(): void
    {
        $this->checkEvenOrOdd(11);
    }

    private function checkEvenOrOdd($number)
    {
        if ($number % 2 === 0) {
            echo $number.'は偶数です';
        } else {
            echo $number.'は奇数です';
        }
    }
}

(new Practice())->main();

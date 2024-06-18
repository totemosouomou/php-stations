<?php

namespace Src\Station15\Practice;

class Practice
{
    public function main(): void
    {
        $max = 10;
        $array = [2, 9, 11, 20, 33];

        $result = array_filter($array, function($element) use($max) {
        echo $element > $max; // maxが参照できる（useを使用しないと参照できない）
        });
    }
}

echo (new Practice)->main();

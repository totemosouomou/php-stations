<?php

namespace Src\Station12\Question;

use Carbon\CarbonImmutable;

class Question
{
    public function main(int $originalPrice, CarbonImmutable $useByDate): int
    {
        $food = new Food($originalPrice, $useByDate);
        return $food->price();
    }
}

// (new Question())->main();

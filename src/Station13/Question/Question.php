<?php

namespace Src\Station13\Question;

class Question
{
    public function main(): void
    {
        $car = new Car();
        $car->turnRight();
        $car->backLeft();
    }
}

// Question.php 内 main メソッドで Car クラスの turnRight, backLeftを実行する
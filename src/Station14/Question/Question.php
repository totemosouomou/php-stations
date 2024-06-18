<?php

namespace Src\Station14\Question;

class Question
{
    public function main(): void
    {
        Car::pickup();
        Car::getDoors();
    }
}

// src/Station14/Question/Question.php ファイル内 main メソッドでpickup、getDoorsを実行する
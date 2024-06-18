<?php

namespace Src\Station16\Question;

class Question
{
    public function main(string $humanName, string $carName, int $passengers): void
    {
        $human = new Human($humanName);
        $car = new Car($carName);

        // $human->name = $humanName;
        // echo $human->name;
        // echo $human->buyCar($car);
        // echo $car->run();
        $human->buyCar($car);
        $car->run();
        $print = $car->pickup($passengers);
        echo $print;
    }
}

// main.phpにHuman クラス、 Car クラス両方のインスタンスを作成し、以下のメソッドを順に実行してください
// Human クラスの buyCar メソッド
// Car クラスの run メソッド
// Car クラスの pickup メソッド (メソッドの返り値は echo で出力してください)
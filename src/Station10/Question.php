<?php

namespace Src\Station10;

class Question
{
    public function main(string $animal): string
    {
        return $this->getAnimalName($animal);
    }

    private function getAnimalName(string $animal): string
    {
        if($animal === '猫') {
            return 'ミケ';
        }
        if($animal === '犬') {
            return 'ポチ';
        }
        return 'わかりません';
    }
}

// echo (new Question())->main('アヒル');

// src/Station10/Question.php ファイルの Question クラス内に記述してください。

// 引数 $animalの値に応じて、返り値が以下の通りとなるメソッド getAnimalName を作成してください。

// また、作成したメソッドは main メソッド内で呼び出してください。

// $animal の値	返り値
// 猫	ミケ
// 犬	ポチ
// 上記以外	わかりません
// クリア条件
// 1
// 引数に応じて動物の名前を返す
// 2
// 仕様に準じたgetAnimalNameメソッドが定義されている
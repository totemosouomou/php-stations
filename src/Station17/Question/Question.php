<?php

namespace Src\Station17\Question;

class Question
{
    public function main(): void
    {
        $keyboard = new Keyboard;
        $piano = new PianoSound;
        $guitar = new GuitarSound;
        $keyboard->play($piano, 'ド');
        $keyboard->play($guitar, 'C');
    }
}

// 上記クラス群の作成後、 Question.php の main メソッド内に以下の処理を記述してください。

// インスタンス化した Keyboard クラスの play メソッドを利用して、以下を順に実行する
// 「ピアノのドを鳴らします」を出力
// 「エフェクトをかけたギターのCを鳴らします」を出力
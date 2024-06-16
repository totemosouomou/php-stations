<?php

namespace Src\Station08;

class Question
{
    public function main(): array
    {
        $array = [
            [ 'アザラシ','アライグマ'],
            ['ウサギ','ウシ','ウマ'],
            ['オオカミ','オットセイ'],
        ];
        // print_r($array);
        array_splice($array,1,0,[['イヌ','イルカ']]);
        // print_r($array);
        array_pop($array);
        return $array;
    }
}

// echo (new Question())->main();

// 初めに、以下の表をもとに二次元配列を定義してください。
// 0	1	2
// 0	アザラシ	アライグマ
// 1	ウサギ	ウシ	ウマ
// 2	オオカミ	オットセイ

// この配列を以下の表の形に整形して、 main メソッドの返り値としてください。
// 0	1	2
// 0	アザラシ	アライグマ
// 1	イヌ	イルカ
// 2	ウサギ	ウシ	ウマ

// 整形した二次元配列を返す
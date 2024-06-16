<?php

namespace Src\Station04;

class Question
{
    public function main(): int
    {
        $array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
        $sum = 0;

        foreach ($array as $int) {
            if ($int !== 4 && $int % 4 == 0) {
                break;
            }
            if ($int === 1) {
                $sum = 1;
                continue;
            }
            $sum += $int;
        }
        return $sum;
    }
}

echo (new Question())->main();


// 配列内の値を加算する
// 値が「 4 以外の 4 の倍数」のとき加算せず、繰り返し処理を中断する
// 最終的な計算結果を返り値とする
// 1から7までの加算結果を返す
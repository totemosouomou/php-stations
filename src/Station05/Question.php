<?php

namespace Src\Station05;

class Question
{
    public function main(): int
    {
        $array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
        $sum = 0;

        foreach ($array as $int) {
            if ($int >= 8) {
                break;
            }
            if ($int % 4 > 2) {
                continue;
            }
            if ($int === 1) {
                $sum = 1;
                continue;
            }
            if ($int !== 3 || $int !== 7) {
                $sum += $int;
            }
        }
        return $sum;
    }
}

echo (new Question())->main();

// 配列内の値を加算する
// 4 で割った余りが 2 より大きい値のとき加算しない（繰り返し処理は継続する）
// 値が 8 以上のとき繰り返し処理を中断する
// 1から9のうち3と7以上の値を除く数値の加算結果を返す
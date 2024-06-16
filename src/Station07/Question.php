<?php

namespace Src\Station07;

class Question
{
    public function one(): array
    {
        $array1 = ['北海道' => 1, '東京都' => 13, '大阪府' => 'XX'];
        $array2 = ['広島県' => 34, '京都府' => 26];
        $array3 = ['京都府' => 'XX', '大阪府' => 27];

        $mergedArray = array_merge($array1, $array3, $array2);
        return $mergedArray;
    }

    public function two(): array
    {
        $firstNames = ['太郎', '次郎', '花子'];
        $lastNames = ['山田', '鈴木', '佐藤'];

        $mergedArray2 = array_map(function ($key) use ($lastNames, $firstNames) {
            return $lastNames[$key] .  $firstNames[$key];
        }, array_keys($lastNames));

        return $mergedArray2;
    }

    public function three(): array
    {
        $array = [
            ['name' => 'apple', 'price' => 140],
            ['name' => 'banana', 'price' => 200],
            ['name' => 'orange', 'price' => 120],
        ];

        $array4 = array_column($array, 'price','name');
        return $array4;
    }
}

// (new Question())->three();

// Question.php ファイルの one メソッド内に記述してください。

// 定義済みの 3 つの配列を、以下の 1 つの配列になるよう結合して、返り値にしてください。

// ただし、要素の並び順は以下の通りでなくても構いません。


// [
//     '北海道' => 1,
//     '東京都' => 13,
//     '京都府' => 26,
//     '大阪府' => 27,
//     '広島県' => 34,
// ]
// 問題2
// Question.php ファイルの two メソッド内に記述してください。

// 定義済みの 2 つの配列について、名字と名前を結合した下記の配列を作成して、返り値にしてください。


// ['山田太郎', '鈴木次郎', '佐藤花子']
// 問題3
// Question.php ファイルの three メソッド内に記述してください。

// 定義済みの配列について、以下の連想配列になるようカラムを抽出して、返り値にしてください。


// [
//     'apple' => 140,
//     'banana' => 200,
//     'orange' => 120,
// ]

// クリア条件
// 期待値と一致するよう結合された連想配列を返す
// 結合した姓名を要素に持つ配列を返す
// 期待値と一致するよう抽出された連想配列を返す
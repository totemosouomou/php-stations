<?php

namespace Src\Station11;

class Question
{
    public function main(array $sweets): array
    {
        // print_r($sweets);
        $budget = 300;
        $lessThanBudgetSweets = $this->getSweetsLessThanBudget($sweets, $budget);
        // $keys = array_rand($lessThanBudgetSweets, 3);
        // $selectedSweets = array_intersect_key($lessThanBudgetSweets, array_flip($keys));
        $randomKeys = $this->getRandomKeys($lessThanBudgetSweets, $budget);
        $combination = $this->makeCombination($lessThanBudgetSweets, $randomKeys);

        // var_dump($randomKeys);
        // var_dump($totalPrice);
        return $combination;

    }

    private function getSweetsLessThanBudget(array $sweets, int $budget)
    {
        $lessThanBudgetSweets = [];
        foreach ($sweets as $sweet) {
            if ($sweet['price'] <= $budget) {
                $lessThanBudgetSweets[] = $sweet;
            }
        }
        // var_dump($lessThanBudgetSweets);

        return $lessThanBudgetSweets;
    }

    private function getRandomKeys(array $lessThanBudgetSweets, int $budget)
    {
        do {
            $keys = array_rand($lessThanBudgetSweets, 3);
            $selectedSweets = array_intersect_key($lessThanBudgetSweets, array_flip($keys));
            $totalPrice = array_sum(array_column($selectedSweets, 'price'));
        } while ($totalPrice > $budget);

        return $keys;
    }

    private function makeCombination(array $sweets, array $keys)
    {
        return array_map(function($key) use ($sweets) {
            return $sweets[$key];
        }, $keys);
    }
}

// $sweets = [
//     ['name' => '飴玉', 'price' => 50],
//     ['name' => '綿菓子', 'price' => 60],
//     ['name' => 'ポテトチップス', 'price' => 160],
//     ['name' => 'チョコレート', 'price' => 80],
//     ['name' => 'ドーナツ', 'price' => 120],
//     ['name' => 'キャラメル', 'price' => 180],
//     ['name' => 'ラムネ', 'price' => 90],
//     ['name' => 'クッキー缶', 'price' => 299],
//     ['name' => 'ケーキ', 'price' => 300],
// ];

// echo (new Question())->main($sweets);

// 作成するのは「ある小学生が遠足のために購入するおやつを、 300 円の予算内でランダムに 3 つ選出する」ためのプログラムです。

// 以下の仕様に従い、処理を実装してください。

// main メソッドの引数には、以下のようなお菓子のデータ配列が渡される
// [['name' => '飴玉', 'price' => 50], ['name' => '綿菓子', 'price' => 300], ...]
// 単価 (price) が 300 円より大きいお菓子は、選出から除外する
// 3 つのお菓子をランダムに選出した結果、単価の合計が 300 円を超過する場合は再度ランダムな選出を行う
// 選出は、 3 つのお菓子の単価合計が 300 円以内に収まるまで繰り返す
// 返り値は以下のような 3 つのお菓子データの配列である
// [['name' => '飴玉', 'price' => 50], ['name' => '綿菓子', 'price' => 300], ['name' => 'チョコレート', 'price' => 88]]
// なお、処理ごとにメソッドの分割が必要です。

// 分割したメソッドの命名は、以下の中から適切なものを選んでください。3 つ全て使う必要があります。

// また、各メソッドは main メソッドから呼び出してください。

// makeCombination($sweets, $keys)
// getSweetsLessThanBudget($sweets, $budget)
// getRandomKeys($lessThanBudgetSweets, $budget)
// クリア条件
// 1
// 300円の予算内で3つのお菓子データを抽出する
// 2
// お菓子データの抽出はランダムである
// 3
// getSweetsLessThanBudgetでの処理が命名に合致する
// 4
// getRandomKeysでの処理が命名に合致する
// 5
// makeCombinationでの処理が命名に合致する
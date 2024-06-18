<?php

namespace Src\Station15\Question;

class Calculator
{
  public function multiply(array $multiplieds, int $multiplier)
  {
      if (empty($multiplieds)) {
          return false;
      }

      return array_map(function($value) use ($multiplier) {
          return $value * $multiplier;
      }, $multiplieds);
  }
}

// 計算処理を扱う Calculator クラスを用いて、掛け算の処理を実行するプログラムを作成してください。
// Calculator クラスの定義
// メソッド: public function multiply($multiplieds, $multiplier)
// 第 1 引数 $multiplieds: かけられる数(整数) を格納した配列
// 例: [1, 2, 3]
// 第 2 引数 $multiplier: かける数(整数)
// 例: 2
// 処理内容:
// $multiplieds が空の場合、 false を返す (if 文で処理する)
// $multiplieds が空でない場合、 array_map を用いて $multiplieds 配列内の各数値を $multiplier 倍した新しい配列を返す

<?php

namespace Src\Station12\Question;

use Carbon\CarbonImmutable;

class Food extends Product
{
    protected CarbonImmutable $useByDate;

    public function __construct(int $originalPrice, CarbonImmutable $useByDate)
    {
        parent::__construct($originalPrice);
        $this->useByDate = $useByDate;
    }

    public function price(): int
    {
        $now = CarbonImmutable::now();
        if ($this->useByDate->diffInHours($now) < 5) {

            // 定価の半額を計算し、小数点第1位で切り捨てる
            return (int)floor($this->originalPrice / 2);
        }
        return $this->originalPrice;
    }
    // property はアクセス修飾子・型定義不問、 __construct での定義でなくとも良い
}

// メソッド
// price
// 引数: なし
// 返り値: 数値
// 現在時刻が消費期限まで 5 時間未満の場合、定価の半額を返す
// 日時の比較は CarbonImmutable 型のまま行う
// 定価の半額が整数でない場合、小数点第 1 位で切り捨てた値を返す
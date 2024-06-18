<?php

namespace Src\Station16\Question;

class Car
{
  public string $name = '';
  private int $passenger = 0;

  public function __construct(string $name)
  {
    $this->name = $name;
  }

  // public function run() :string
  // {
  //   return '走行する';
  // }

  public function run() :void
  {
    echo '走行する';
  }

  public function pickup(int $passenger) :int
  {
    $this->passenger += $passenger;
    return $this->passenger;
  }
}

// 以下のプロパティ、メソッドをもつCarクラスを作成してください。なお全てのプロパティ、メソッドは型を定義すること
// プロパティ
// string型のname、デフォルト値は空文字 ('')
// int型のpassenger、デフォルトの値は0
// メソッド
// __constructで引数に与えられたnameを自クラス内のプロパティnameに代入する
// runメソッド
// 引数なしで「走行する」という文字列を返す
// pickupメソッド
// 整数を引数にとり、引数の分だけpassengerの数を増やし、passengerを返す
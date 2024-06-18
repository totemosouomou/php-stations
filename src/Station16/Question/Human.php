<?php

namespace Src\Station16\Question;

class Human
{
  private string $name;

  public function __construct(string $name)
  {
    $this->name = $name;
  }

  // public function buyCar(Car $car) :string
  // {
  //   return $this->name . 'は' . $car->name . 'を購入しました';
  // }

  public function buyCar(Car $car) :void
  {
    echo $this->name . 'は' . $car->name . 'を購入しました';
  }
}

// 以下のプロパティ、メソッドをもつHumanクラスを作成してください。なお全てのプロパティ、メソッドは型を定義すること
// プロパティ
// string型のname
// メソッド
// __constructで引数に与えられたnameを自クラス内のプロパティnameに代入する
// buyCarメソッド
// Carクラスを引数に取り、「Human->nameはCar->nameを購入しました」という文字列を返す

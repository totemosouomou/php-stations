<?php

namespace Src\Station14\Question;

class Vehicle
{
  // Vehicle クラスの定義がここに入ると仮定
}

class Car extends Vehicle
{
  private const DOOR = 5;
  private static $passenger = 0;

  public static function getDoors()
  {
    echo self::DOOR;
  }

  public static function getPassenger()
  {
    echo self::$passenger;
  }

  public static function pickup()
  {
    self::$passenger += 1;
    self::getPassenger();
  }
}

// Vehicle(乗り物)クラスを継承するCarクラスを作成してください。
// Carクラスは以下の定数、staticプロパティ、staticメソッドを持つ
// DOORは5の定数
// $passengerは初期値0のstaticプロパティ
// $passengerの数をechoで表示するgetPassengersメソッド
// $passengerの人数が1増え、getPassengersを実行するpickupメソッド
// DOORの数をechoで表示するgetDoorsメソッド
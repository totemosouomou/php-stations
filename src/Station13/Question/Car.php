<?php

namespace Src\Station13\Question;

class Car extends Vehicle
{
  public function hazard()
  {
    echo 'ハザードランプを点灯する';
  }

  public function run()
  {
    $this->maxSpeed = 60;
    parent::run();
  }

  protected function back()
  {
    $this->hazard();
    parent::back();
  }
}

// hazardメソッドを持つ 「ハザードランプを点灯する」を表示する
// Carクラスはrunが実行された際、maxSpeedを60に設定し、Vehicleクラスのrunを実行する
// Carクラスはbackが実行された際、Carクラス内のhazardメソッドを実行し、Vehicleクラスのbackを実行する (Carクラスにメソッドを追加してよい)
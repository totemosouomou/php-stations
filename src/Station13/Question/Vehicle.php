<?php

namespace Src\Station13\Question;

class Vehicle
{
  private $name;
  protected $maxSpeed;

  protected function run()
  {
    echo 'アクセルを踏む';
  }

  private function stop()
  {
    echo 'ブレーキを踏む';
  }

  private function right()
  {
    echo '右にハンドルを回す';
  }

  private function left()
  {
    echo '左にハンドルを回す';
  }

  protected function back()
  {
    echo 'バックする';
  }

  public function turnRight()
  {
    $this->stop();
    $this->right();
    $this->run();
  }

  public function backLeft()
  {
    $this->stop();
    $this->left();
    $this->back();
  }
}


// name, maxSpeedのプロパティと以下のメソッドを持つ
// run: 「アクセルを踏む」と表示する
// stop:　「ブレーキを踏む」と表示する
// right: 「右にハンドルを回す」と表示する
// left:　「左にハンドルを回す」と表示する
// back: 「バックする」と表示する
// turnRight: stop, right, run を実行する
// backLeft: stop, left, back を実行する
// turnRight, backLeft はどのクラスからも実行することができる
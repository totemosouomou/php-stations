<?php

namespace Src\Station17\Question;

interface SoundInterface
{
  public function isValidatedInput(string $scale):bool;
  public function sound(string $scale):string;
}

// SoundInterface
// 楽器が音を鳴らす際に利用される Interface
// メソッド
// isValidatedInput
// 引数: string $scale (音名)
// 返り値: bool
// 処理: 実装するクラスによって異なるため後述
// sound
// 引数: string $scale (音名)
// 返り値: string
// 処理: 実装するクラスによって異なるため後述
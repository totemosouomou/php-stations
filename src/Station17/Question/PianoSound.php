<?php

namespace Src\Station17\Question;

class PianoSound implements SoundInterface
{
  private const INSTRUMENT_NAME = 'ピアノ';

  public function isValidatedInput(string $scale):bool
  {
    $array = ['ド','レ','ミ','ファ','ソ','ラ','シ'];
    return array_key_exists($scale,array_flip($array));
    // return in_array($scale, $array, true);
  }

  public function sound(string $scale):string
  {
    return self::INSTRUMENT_NAME.'の'.$scale;
  }
}

// SoundInterface をもとに作成する、ピアノの音を表現したクラス
// プロパティ
// 定数: INSTRUMENT_NAME (楽器名)
// 型: string
// 値: ピアノ
// メソッド
// isValidatedInput: 引数が「ドレミファソラシ」のいずれかに該当するか否か検証する
// sound: 定数と引数の音名を結合した文字列を返す
// 例: 「ピアノのミ」
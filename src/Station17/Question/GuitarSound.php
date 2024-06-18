<?php

namespace Src\Station17\Question;

class GuitarSound implements SoundInterface
{
  // private const INSTRUMENT_NAME = 'エフェクトをかけたギター';
  private const INSTRUMENT_NAME = 'ギター';

  public function isValidatedInput(string $scale):bool
  {
    $array = ['C','D','E','F','G','A','B'];
    return array_key_exists($scale,array_flip($array));
  }

  public function sound(string $scale):string
  {
    return $this->effect($scale);
  }

  private function effect(string $scale):string
  {
    return 'エフェクトをかけた'.self::INSTRUMENT_NAME.'の'.$scale;
    // return self::INSTRUMENT_NAME.'の'.$scale;
  }
}

// GuitarSound クラス
// SoundInterface をもとに作成する、ギターの音を表現したクラス
// プロパティ
// 定数: INSTRUMENT_NAME (楽器名)
// 型: string
// 値: ギター
// メソッド
// isValidatedInput: 引数が「C D E F G A B」のいずれかに該当するか否か検証する
// sound: effect メソッドの返り値を返す
// effect
// 引数: string $scale (音名)
// 返り値: string
// 処理: 「エフェクトをかけた」と、定数と引数の音名を結合した文字列を返す
// 例: 「エフェクトをかけたギターのD」
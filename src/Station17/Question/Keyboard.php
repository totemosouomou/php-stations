<?php

namespace Src\Station17\Question;

class Keyboard
{
  public function play(SoundInterface $key, string $scale):void
  {
    if(!$key->isValidatedInput($scale))
    {
      echo 'この音を鳴らすことはできません';
      return;
    }
    echo $key->sound($scale) . 'を鳴らします';
  }
}

// Keyboard クラス
// 楽器のキーボードを表現したクラス
// メソッド
// play
// 引数
// 第1引数: SoundInterface
// 第2引数: string
// 返り値: なし
// 処理:
// isValidatedInput を実行し、 false の場合は「この音を鳴らすことはできません」を出力して処理終了
// isValidatedInput が true の場合、 SoundInterface の sound メソッドの返り値と「を鳴らします」を結合して出力
// 例: 「ピアノのミを鳴らします」、「エフェクトをかけたギターのDを鳴らします」
<?php

namespace Src\Station06;

class Question
{
    public function main(): array
    {
        $array = ['red','blue','yellow'];
        // print_r($array);
        array_splice($array, 0, 0, ['white','black',]);
        // print_r($array);
        array_splice($array,4,1);
        // print_r($array);
        array_splice($array,3,0,'green');
        // print_r($array);

        return $array;
    }
}

(new Question())->main();

// ['red', 'blue', 'yellow'] の要素を持つ添字配列を定義してください。
// インデックス 0 に 'white' , インデックス 1 に 'black' を追加
// 要素 'yellow' を削除
// 要素 'red' と 'blue' の間に 'green' を挿入
// ※ これらの処理はどのような順番で行っても構いません。
// 期待値と一致する配列を返す
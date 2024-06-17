<?php

namespace Src\Station09;

class Question
{
    public function main(): array
    {
        $users = [
            [
                'id' => 1,
                'last_name' => '山田',
                'first_name' => '太郎',
                'age' => 20,
                'password' => 'yamada',
            ],
            [
                'id' => 2,
                'last_name' => '鈴木',
                'first_name' => '次郎',
                'password' => 'suzuki',
            ],
            [
                'id' => 3,
                'last_name' => '佐藤',
                'first_name' => '花子',
                'password' => 'sato',
            ],
        ];

        $array = [];
        foreach ($users as $user) {
            $filteredUser = [];
            foreach ($user as $key => $value) {
                if ($key !== 'password') {
                    $filteredUser[$key] = $value;
                }
                $filteredUser['full_name'] = $user['last_name'] . $user['first_name'];

                if (empty($filteredUser['age'])) {
                    $filteredUser['age'] = null;
                }
            }
            $array[] = $filteredUser;
        }
        // print_r($array);
        return $array;
    }
}

// echo (new Question())->main();

// 'last_name' と 'first_name' を結合した要素を持つ、 'full_name' キーを追加（例: 'full_name' => '山田太郎' )
// 'age' キーの存在しない要素について、 'age' => null を追加
// 'password' キーを削除
// 上記全ての処理を行った配列を、 main メソッドの返り値とする
// 返り値となる配列内の要素の順序は問わない
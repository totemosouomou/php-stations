<?php

namespace Src\Station13\Practice;

require_once('vendor/autoload.php');

class Practice
{
    public function main(): void
    {
        $dog = new Dog();
        $dog->active();  // 走る止まるジャンプが出力されます

        // $dog->eat();   // publicのため正常に実行される
        // $dog->sleep();  // protectedのためエラーになる
        // $dog->active();  // privateのためエラーになる

        // echo $dog->name;  // publicのため表示される
        // echo $dog->age;  // protectedのためエラーになる
        // echo $dog->color;  // privateのためアクセスできず表示されない
    }
}

(new Practice)->main();

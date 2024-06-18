<?php

namespace Src\Station16\Practice;

require_once('vendor/autoload.php');

class Practice
{
    public function main(): void
    {
        $dog = new Dog('Pochi');
        $dog->run();
        echo $dog->age;
        echo $dog->addAge(1);
        $dog2 = new Dog('Hashi');
        echo $dog->walkWithDog($dog2);
    }
}

(new Practice)->main();

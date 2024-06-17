<?php

namespace Src\Station12\Practice;

Class Bird extends Animal
{
    public function __construct($type)
    {
        parent::__construct($type);
    }

    public function fly()
    {
        echo '飛ぶ';
    }
}
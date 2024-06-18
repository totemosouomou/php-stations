<?php

namespace Src\Station14\Practice;

require_once('vendor/autoload.php');

class Practice
{
    public function main(): void
    {
        Dog::barking();
    }
}

(new Practice)->main();

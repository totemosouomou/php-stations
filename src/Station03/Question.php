<?php

namespace Src\Station03;

class Question
{
    public function main(mixed $arg): string
    {
        switch ($arg) {
            case $arg === 1:
                return 'りんご';
                break;
            case $arg === 2:
                return 'みかん';
                break;
            case $arg === 3:
                return 'みかん';
                break;
            default:
                return 'さくらんぼ';
        }
    }
}

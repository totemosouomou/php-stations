<?php

namespace Src\Station17\Practice;

require_once('vendor/autoload.php');

class Practice
{
    // public function main(): void
    // {
    //     $mailNotifier = new MailNotification();
    //     $this->sendNotification($mailNotifier);
    // }

    public function main(): void
    {
        $lineNotifier = new LineNotification();
        $this->sendNotification($lineNotifier);
    }

    public function sendNotification(NotificationInterface $notification): void
    {
        $notification->setMessage('新年のご挨拶', 'あけましておめでとうございます');
        $notification->sendMessage();
    }

    // 出力結果
    // 新年のご挨拶を件名にセット
    // あけましておめでとうございますを本文にセット
    // メールを送信
}

(new Practice)->main();

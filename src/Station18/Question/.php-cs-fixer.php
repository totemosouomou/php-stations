<?php

$finder = PhpCsFixer\Finder::create()->in(__DIR__);

return (new PhpCsFixer\Config())
    ->setRules([
        '@PSR2' => true, // PSR-2コーディング規約を適用
        'array_syntax' => ['syntax' => 'short'], // 配列は[]で定義する
        'no_useless_else' => true, // ロジック上不要なelse文を削除する
        'ordered_class_elements' => ['order' => [
            'public', 'protected', 'private', // Class内のメソッドをpublic, protected, privateの順で並び替える
        ]],
        // 'trailing_comma_in_multiline' => ['elements' => ['arrays']],
    ])
    ->setUsingCache(false)
    ->setFinder($finder);

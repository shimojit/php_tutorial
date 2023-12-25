<?php

mb_language("Japanese");
mb_internal_encoding("UTF-8");

$user_name = 'taro';
$to = 'sample@sample.com';
$subject = 'メールテスト１';

$message =<<<EOM
{$user_name}さん、

このメールはテスト送信です。
http://{$_SERVER['SERVER_NAME']}
EOM;

$headers = 'From: sender@sender.com' . "\r\n";

$ret = mb_send_mail($to, $subject, $message, $headers);

var_dump($ret);
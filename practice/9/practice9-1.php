<?php

$str1 = '0120';
$str2 = '090';

//preg_match()を使い結果を取り出す。
$result1 = preg_match('/\A([0-9]{4})\z/', $str1);
$result2 = preg_match('/\A([0-9]{4})\z/', $str2);

var_dump($result1);
var_dump($result2);
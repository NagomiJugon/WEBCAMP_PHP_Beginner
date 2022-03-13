<?php

//文字列型の確認
$s = "Hello";
var_dump($s);

//1文字目にアクセス
echo $s[1] , "\n";

//マルチバイトで０文字目にアクセス
$multi_string = "あいうえお";
var_dump($multi_string);
echo $multi_string[0], "\n";

//数字と数値
$num_i = 123;
$num_s = "123";
var_dump($num_i);
var_dump($num_s);

//シングルクォートとダブルクォートの違い
$double_s = "num is {$num_i} \n";
$single_s = 'num is {$num_i} \n';
var_dump($double_s);
var_dump($single_s);
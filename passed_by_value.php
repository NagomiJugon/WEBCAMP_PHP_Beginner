<?php

//関数の宣言
function myFunc ( int $i ) {
    // $iの値を２倍にする
    $i *= 2; // $i = $i * 2 と同じ　複合演算子
    //値を確認する
    echo "in myFunc, i is {$i} \n";
}

//変数への代入
$i = 10 ;
//関数の実行
myFunc( $i );
//変数 i の中身の確認
echo "i is {$i} \n";
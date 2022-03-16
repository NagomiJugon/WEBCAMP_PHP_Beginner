<?php

//「引数の値を２倍にする」関数
function numToDouble ( int $i ) : int {
    // 値を２倍にする
    $ret = $i * 2 ;
    
    //戻り値
    return $ret ;
}
//
$num = numToDouble( 10 );
echo "10 を２倍にしたら {$num} になる \n";

//２つの引数を加算する関数
function numAdd ( int $a , int $b ) : int {
    //加算する
    $ret = $a + $b ;
    return $ret ;
}
//
$add = numAdd( 5 , 6 );
echo "5 と 6 を足したら {$add} になる \n";

<?php

//ファイルの読み込み
require_once( __DIR__ . "/WEBCAMP_Log.php" );
//
use WEBCAMP\Log;

/* エラーになる
class Log {
    public function test() {
        echo "log_use_2.phpのメソッド \n";
    }
}
*/

//「名前空間付き」のクラスを使う（非修飾名）
$obj = new Log();
$obj -> test();

<?php

class Class_1 {
    //
    private $val_1;
    
    public function func_1() {
        //処理
        echo "メソッドの処理 \n";
    }
    
    //アクセサ
    public function set_val_1( $v ) {
        $this -> val_1 = $v ;
    }
    //
    public function get_val_1() {
        return $this -> val_1 ;
    }
}

//クラスからインスタンス（オブジェクト）を作ってみる
$obj = new Class_1();
var_dump( $obj );
$obj -> func_1(); //メソッドを呼び出す
//echo $obj -> val_1 , "\n"; //変数を読む：これはエラーになる

//
$obj -> set_val_1( 'data' );
echo $obj -> get_val_1() , "\n";
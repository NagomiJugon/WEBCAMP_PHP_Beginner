<?php

//traitの宣言
trait fragment {
    public function trait_method() {
        echo "トレイトのメソッド \n";
    }
}
//
class Class_1 {
    use fragment; //traitの使用宣言
    
    public function class_method() {
        echo "クラスのメソッド \n";
    }
}
//
$obj = new Class_1();
$obj -> class_method();
$obj -> trait_method();
//fragment(); //単体では使えなかった

<?php

//
abstract class Ab_Class {
    //
    abstract public function ab_method();
    //
    public function method() {
        echo "普通のメソッド \n";
    }
}

//
class C_Class extends Ab_Class {
    //
    public function ab_method() {
        echo "子クラスで実装した抽象メソッド \n";
    }
}

//
//obj = new Ab_Class(); //これはエラーになる

//
$obj = new C_Class();
$obj -> method();
$obj -> ab_method();
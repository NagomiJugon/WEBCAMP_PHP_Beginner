<?php

//
class P_Class {
    //
    public function p_method() {
        echo "親クラス　内　親メソッド \n";
    }
    //
    public function method() {
        echo "親クラス　内　メソッド \n";
    }
}

//
class C_Class extends P_Class {
    //
    public function c_method() {
        echo "子クラス　内　子メソッド \n";
    }
    //
    public function method() {
        echo "子クラス　内　メソッド \n";
    }
}

//
$obj = new C_Class();
$obj -> p_method();
$obj -> c_method();
$obj -> method();
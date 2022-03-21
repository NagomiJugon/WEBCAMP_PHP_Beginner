<?php

//
interface interface_A {
    public function method_A();
}
//
interface interface_B {
    public function method_B( int $i );
}

//
class Hoge implements interface_A, interface_B {
    //
    public function method_A() {
        echo "method_A \n";
    }
    //
    public function method_B( int $i ) {
        echo "method_B {$i} \n";
    }
}

//
$obj = new Hoge();
var_dump( $obj );
$obj -> method_A();
$obj -> method_B( 999 );

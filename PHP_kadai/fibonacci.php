<?php

function fibonacciCalc1( int $firstNum , int $secondNum , int $border ) {
    $array = [ $firstNum , $secondNum ];
    
    while ( end( $array ) < $border ) {
        $lastNum = count( $array ) - 1;
        $nextNum = $array[ $lastNum - 1 ] + $array[ $lastNum ];
        $array[] = $nextNum;
    };
    
    foreach ( $array as $value ) {
        echo "{$value} \n";
    }
}

fibonacciCalc1( 0 , 1 , 10000 );



function fibonacciCalc2( int $firstNum , int $secondNum , int $border ) {
    echo "{$firstNum} \n" , "{$secondNum} \n";
    do {
        $firstNumCopy = $firstNum;
        $firstNum = $secondNum;
        $secondNum = $firstNumCopy + $secondNum;
        echo "{$secondNum} \n";
    } while ( $secondNum < $border );
}

//fibonacciCalc2( 0 , 1 , 10000 );
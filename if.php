<?php

//
if ( true ) {
    echo "true　だとここを通る？？？ \n";
}

//
if ( false ) {
    echo "false　だとここを通る？？？ \n";
}

//
$age = 19 ;
if ( $age >= 20 ) {
    echo "成人です \n";
}
if ( $age < 20 ) {
    echo "未熟です \n";
}

//elseで書き換え
$age = 19 ;
if ( $age >= 20 ) {
    echo "成人です \n";
} else {
    echo "未成年です \n";
}

//elseifつき
$age = 19 ;
if ( $age > 20 ) {
    echo "成人です \n";
} else if ( $age === 20 ) {
    echo "新成人おめでとう \n";
} else {
    echo "未成年です \n";
}
<?php

//
$i = -2 ;
switch ( $i ) {
    case 0 :
        echo "i は 0 です \n";
        break;
        
    case 1 :
        echo "i は 1 です \n";
        break;
    
    default :
        echo "i は 0 と 1 以外です \n";
        break;
}

//
$i = -2 ;
switch ( $i ) {
    case 0 :
        echo "i は 0 です \n";
        break;
        
    case 1 :
        echo "i は 1 です \n";
        break;
    
    case 2 :
        echo "i は 0 と 1 以外です \n";
        break;
} //何も出力されない  ->  defaultは必須ではない？

//
// PHP 8未満だと特に注意が必要なコード
$i = 2 ;
switch ( $i ) {
    case '2a' :
        echo "i は 2a です \n";
        break;
        
    case '2' :
        echo "i は 2(string) です \n";
        break;
        
    case 2 :
        echo "i は 2(int) です \n";
}
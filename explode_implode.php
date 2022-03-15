<?php

//元の文字列:「；」で区切られていると想定
$base_string = "Stollen;Panettone;Pandoro;Kouglof;Lussekatter";
echo "元の文字列: \n";
var_dump( $base_string );

//explode()で、；のところで分解
$exploded_array = explode( ";" , $base_string );
echo "\n explodeした配列 \n";
var_dump( $exploded_array );
foreach ($exploded_array as $value) {
    echo "{$value} \n";
}

//implode()で、,(カンマ)で繋げて再構成
$imploded_string = implode( "," , $exploded_array );
echo "\n implodeで繋げた文字列 \n";
var_dump( $imploded_string );
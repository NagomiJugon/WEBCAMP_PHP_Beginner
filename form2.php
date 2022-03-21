<?php

// h()関数の定義
function h ( string $s) : string {
    return htmlspecialchars( $s , ENT_QUOTES );
}

//HYML formから入ってくる情報の一覧
$html_form_param = [
    "pw" => "パスワード" , 
    "radio_a" => "ラジオボタン" ,
    "check" => "チェックボックス" ,
    "sele" => "セレクトボックス" ,
    "tarea" => "テキストエリア" ,
    "hide" => "隠れた入力(hidden)",
];

//HTML formからの情報を取得する
$datum = []; //データを入れる領域の確保と初期化
//データ取得処理
foreach ( $html_form_param as $name => $type ) {
    $datum[ $name ] = $_POST[ $name ] ?? "";
}

//入力データのかくにん
// XXX 今回は一旦、var_dumpでデータの確認だけ
var_dump( $datum );
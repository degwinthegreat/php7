<?php
// 空の配列を作る
$numArray = array();
// 配列 $numArrayの値が5個になるまで繰り返す
while (count($numArray) < 5) {
    // 1~30から乱数を1個作る
    $num = mt_rand(1,30);
    // $numArrayに含まれているかどうか調べる
    if (! in_array($num, $numArray)) {
        array_push($numArray, $num);
    }
}
// 5個の数値が入った配列を確認する
print_r($numArray);
?>
<?php
$list = array(20, -32, 50, -5, 40);
$count = count($list); // 配列の値の個数
$sum = 0;
for ($i=0; $i<$count; $i++) {
    // 配列$listから値を1つずつ取り出す
    $value = $list[$i];
    if ($value<0) {
        // 値がマイナスだったらこの繰り返し処理をスキップする
        continue;
    }
    $sum += $value;
}
echo "合計：$sum";
?>
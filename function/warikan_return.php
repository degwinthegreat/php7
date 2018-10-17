<?php
function warikan($total, $ninzu) {
    // 人数が正でないときは処理を中断する
    if ($ninzu<=0) {
        return; // 中断する
    }
    // 割り算の結果を表示する
    $result = $total/$ninzu;
    echo "{$total}円を{$ninzu}人で分けると{$result}円。";
    echo "<br>" . PHP_EOL;
}

// 計算
warikan(2500, 2);
warikan(3000, 0);
warikan(5500, 4);
?>
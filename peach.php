<?php

//桃の価格を15個生成 
for ($i = 1; $i <16; $i++){
    $peachPrice [] = rand (200, 300);
}


//桃の最高値を出力
$peachPriceMax = max($peachPrice);
echo $peachPriceMax;
echo '<br>';

//桃の最安値を出力
$peachPriceMin = min ($peachPrice);
echo $peachPriceMin;
echo '<br>';

//桃の平均価格を出力
$peachPriceAvg = array_sum($peachPrice) / count($peachPrice);
echo round($peachPriceAvg);

?>
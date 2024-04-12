<?php
//イチゴの価格の乱数を15個生成
for ($i= 0; $i < 15; $i++){
    $strawberryPrice [] = rand(400, 500);
}

//イチゴの最高値を出力
$strawberryPriceMax = max ($strawberryPrice);
echo $strawberryPriceMax;
echo '<br>';

//イチゴの最安値を出力
$strawberryPriceMin = min ($strawberryPrice);
echo $strawberryPriceMin;
echo '<br>';

//イチゴの平均価格を出力
$strawberryPriceAvg = array_sum($strawberryPrice) / count ($strawberryPrice);
echo round($strawberryPriceAvg);

?>
<?php
define('TAX', 1.1); // 税率10％を定義
$products = ["鉛筆" => 100, "消しゴム" => 150, "物差し" => 500];//連想配列に商品の値段と価格を入れる

function tax_calculation($price) // 税込み計算をする関数を定義 
{
   $amount = $price * TAX;//税込み計算を実施する 
    return $amount;//関数から値を返す。
}

foreach ($products as $key => $price) {// foreach構文で連想配列に格納されている値をループしながら出力、計算された金額を表示
    $tax_included_price = tax_calculation($price);
    print $key . 'の税込み価格は' . $tax_included_price . '円です。' . '<br>';
}
?>
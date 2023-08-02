<?php
    define("TAX" , 1.1); //税率10％を定義
    $products = ["鉛筆" => 100 , "消しゴム" =>  150 , "物差し" => 500 ];
    //変数$productsを連想配列で構成
    //連想配列の中身には鉛筆、消しゴム、物差しとその値段を格納
    function tax_calculation($products){
    //税込み計算をする関数を定義
      $products  = $products * "TAX";
    //連想配列に入っている商品と税率をかける
    }
      foreach ($products as $key => $value ) {
    //foreach構文で連想配列に格納されている値をループしながら出力
        echo $key . 'の税込み価格は' . $value . '円です。' .  "\n" ;
    }
?>
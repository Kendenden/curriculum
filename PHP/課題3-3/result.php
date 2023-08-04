<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>おみくじプログラム</title>
</head>
<body>
<?php
    $your_name = $_GET['your_name'];         //入力された名前を受け取る
    $number    = $_GET['lucky_number'];      //入力された1～6の数字を受け取る
    $omikuji   = $number * mt_rand(1,6)  ;   //かけ合わせ

    if ($omikuji >= 1 && $omikuji <= 10) {   //変数の$omikuji値が1以上10以下であれば凶
        $result = '凶';
      } else if ($omikuji >= 11 && $omikuji <= 15) { //変数の$omikuji値が11以上15以下であれば小吉
        $result = '小吉';
      } else if ($omikuji >= 16 && $omikuji <= 20) { //変数の$omikuji値が16以上20以下であれば中吉
        $result = '中吉';
      } else if ($omikuji >= 21 && $omikuji <= 25) { //変数の$omikuji値が21以上25以下であれば吉
        $result = '吉';
      } else if ($omikuji >= 26 && $omikuji <= 36) { //変数の$omikuji値が26以上36以下であれば大吉
        $result = '大吉';
      } else if ($omikuji >= 37){                   //変数の$omikuji値が37以上であれば残念
        $result = '残念';
      }
    date_default_timezone_set('Asia/Tokyo'); //タイムゾーンを東京の時間に変更
?>
    <p><?php  echo date('Y/m/d H:i:s')  ?></p>
    <p>名前は<?php  echo $your_name ; ?>です。</p> 
    <p>番号は<?php  echo $omikuji; ?>です。</p>
    <p>結果は<?php  echo $result; ?>です。</p>
</body>
</html>


    


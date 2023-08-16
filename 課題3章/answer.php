<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>回答結果ページ</title>
</head>
<body>
<?php
// POST送信で送られてきた名前の変数、選択した回答、問題の答えの変数を作成
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $answer_1 = isset($_POST["answer_1"]) ? $_POST["answer_1"] : "";
    $answer_2 = isset($_POST["answer_2"]) ? $_POST["answer_2"] : "";
    $answer_3 = isset($_POST["answer_3"]) ? $_POST["answer_3"] : "";

    // 問題の答えの変数を作成
    $correct_answer_1 = "80";
    $correct_answer_2 = "HTML";
    $correct_answer_3 = "select";
}

// 選択した回答と正解が一致しているかを判定する関数
function checkAnswer($selectedAnswer, $correctAnswer) {
    if ($selectedAnswer === $correctAnswer) {
        return "正解！";
    } else {
        return "残念・・・";
    }
}
?>
<p><?php echo htmlspecialchars($name); ?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<p><?php echo checkAnswer($answer_1, $correct_answer_1); ?></p>

<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<p><?php echo checkAnswer($answer_2, $correct_answer_2); ?></p>

<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<p><?php echo checkAnswer($answer_3, $correct_answer_3); ?></p>

</body>
</html>

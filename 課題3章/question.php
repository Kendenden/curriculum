<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php
        $name = $_POST["name"];
    
        // ①画像を参考に問題文の選択肢の配列を作成してください。
        $choices_1 = array("80", "22", "20", "21");
        $choices_2 = array("PHP", "Python", "Java", "HTML");
        $choices_3 = array("join", "select", "insert", "update");
    
        // ② ①で作成した、配列から正解の選択肢の変数を作成してください
        $correct_answer_1 = "80";
        $correct_answer_2 = "HTML";
        $correct_answer_3 = "select";
?>

    <p>お疲れ様です<?php echo htmlspecialchars($name); ?>さん</p>
    <!--フォームの作成 通信はPOST通信で-->
    <form action="answer.php" method="POST">
      <h2>①ネットワークのポート番号は何番？</h2>
      <!--③ 問題のradioボタンを「foreach」を使って作成する-->
      <?php foreach ($choices_1 as $choice) : ?>
        <input type="radio" name="answer_1" value="<?php echo htmlspecialchars($choice); ?>"><?php echo htmlspecialchars($choice); ?><br>
      <?php endforeach; ?>
    
      <h2>②Webページを作成するための言語は？</h2>
      <!--③ 問題のradioボタンを「foreach」を使って作成する-->
      <?php foreach ($choices_2 as $choice) : ?>
        <input type="radio" name="answer_2" value="<?php echo htmlspecialchars($choice); ?>"><?php echo htmlspecialchars($choice); ?><br>
      <?php endforeach; ?>
    
      <h2>③MySQLで情報を取得するためのコマンドは？</h2>
      <!--③ 問題のradioボタンを「foreach」を使って作成する-->
      <?php foreach ($choices_3 as $choice) : ?>
        <input type="radio" name="answer_3" value="<?php echo htmlspecialchars($choice); ?>"><?php echo htmlspecialchars($choice); ?><br>
      <?php endforeach; ?>
    
      <!--問題の正解の変数と名前の変数を[answer.php]に送る-->
      <input type="hidden" name="name" value="<?php echo htmlspecialchars($name); ?>">
      <input type="hidden" name="correct_answer_1" value="<?php echo htmlspecialchars($correct_answer_1); ?>">
      <input type="hidden" name="correct_answer_2" value="<?php echo htmlspecialchars($correct_answer_2); ?>">
      <input type="hidden" name="correct_answer_3" value="<?php echo htmlspecialchars($correct_answer_3); ?>">
    
      <input type="submit" value="回答する">
    </form>
    
    
</body>
</html>

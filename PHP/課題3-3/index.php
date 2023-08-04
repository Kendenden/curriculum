<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Omikuji</title>
</head>
<body>
    <form action="result.php" method="get">
        <p>好きな名前を入力してください</p>
        <input type="text" name ="your_name">
        <p>1～6の中で好きな数字を入力してください。</p>
        <input type="number" name="lucky_number" min="1" max="6" /><br>
        <input type="submit" value="送信">
    </form>
</body>
</html>
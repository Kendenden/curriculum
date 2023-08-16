<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>おみくじプログラム</title>
</head>
<body>
    <h1>おみくじプログラム</h1>
    <form action="result.php" method="get">
        <label for="your_name">名前：</label>
        <input type="text" name="your_name" id="your_name" required>
        <br>
        <label for="lucky_number">好きな番号(1～6)：</label>
        <input type="number" name="lucky_number" id="lucky_number" min="1" max="6" required>
        <br>
        <button type="submit">おみくじを引く</button>
    </form>
</body>
</html>
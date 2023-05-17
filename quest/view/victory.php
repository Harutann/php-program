<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>勝利画面</title>
</head>
<body>
    <h1>勝利！よくやった！</h1>
    <a href="index.php">スタート画面に戻る</a>
<?php
    session_start();
    if ($_SESSION["level"] >= 6) {
        header("Location:gameclear.php");
    }
    $_SESSION["level"] += 1;
    
?>
</body>
</html>
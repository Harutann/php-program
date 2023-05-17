<?php
error_reporting(E_ALL & ~E_NOTICE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>スタート画面</title>
</head>
<body>
    <h1>PHPクエスト!!</h1>
    <?php session_start();
    echo "<h3>レベル".$_SESSION["level"]."</h3>"; ?>
    <?php
    if ($_SESSION["level"] == NULL) {
        echo '<a href="../controler/monsterselect.php"><button disabled>スタート</button></a>';
    }else{
        echo '<a href="../controler/monsterselect.php"><button>スタート</button></a>';
    }
    ?>
    <a href="../controler/levelreset.php"><button>Levelリセット</button></a>
    <?php
        $_SESSION["enemymsg"] = "";
        $_SESSION["memsg"] = "";
        $_SESSION["enemyheal"] = "";
        $_SESSION["healgcount"] = 0;
        $_SESSION["healcount"] = 0;    
    ?>
</body>
</html>
<?php
    session_start();
    $level = $_SESSION["level"];
    if ($level >= 5) {
        $_SESSION["meHP"] = 30;
    }else{
        $_SESSION["meHP"] = 15;
    }

    if ($level == 1) {
        $_SESSION["monster"] = 'https://nanamiyuki.com/wp-content/uploads/2021/11/%E3%83%A2%E3%83%B3%E3%82%B9%E3%82%BF%E3%83%BC_%E3%81%8A%E3%81%B0%E3%81%91%E5%9E%8B_%E3%81%8A%E3%81%B0%E3%81%91.png';
        $_SESSION["enemyHP"] = 15;
    }elseif ($level == 2) {
        $_SESSION["monster"] = 'https://nanamiyuki.com/wp-content/uploads/2022/09/devil-dragon_1e.png';
        $_SESSION["enemyHP"] = 30;
    }elseif ($level == 3) {
        $_SESSION["monster"] = 'https://nanamiyuki.com/wp-content/uploads/2022/09/%E3%83%A1%E3%83%95%E3%82%A3%E3%82%B9%E3%83%88%E3%83%95%E3%82%A7%E3%83%AC%E3%82%B9.png';
        $_SESSION["enemyHP"] = 40;
    }elseif ($level == 4) {
        $_SESSION["monster"] = 'https://nanamiyuki.com/wp-content/uploads/2021/11/%E3%83%A2%E3%83%B3%E3%82%B9%E3%82%BF%E3%83%BC_%E3%81%8A%E3%81%B0%E3%81%91%E5%9E%8B_%E3%81%8A%E3%81%B0%E3%81%91.png';
        $_SESSION["enemyHP"] = 15;
    }elseif ($level == 5) {
        $_SESSION["monster"] = 'https://nanamiyuki.com/wp-content/uploads/2022/09/devil-dragon_1e.png';
        $_SESSION["enemyHP"] = 30;
    }elseif ($level == 6) {
        $_SESSION["monster"] = 'https://nanamiyuki.com/wp-content/uploads/2022/09/%E3%83%A1%E3%83%95%E3%82%A3%E3%82%B9%E3%83%88%E3%83%95%E3%82%A7%E3%83%AC%E3%82%B9.png';
        $_SESSION["enemyHP"] = 50;
    }
    header("Location:../view/battle.php");
?>

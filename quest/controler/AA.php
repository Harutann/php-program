<?php
session_start();

$attack = rand(1,10); //命中率
$enemycrit = rand(1,10); //敵のcrit
$mecrit = rand(1,5); //自分のcrit

// 敵の攻撃
if ($attack != 1) {
    if ($enemycrit % 3 == 0){
        $_SESSION["meHP"] -= 4;
    }else{
        $_SESSION["meHP"] -= 1;
    }
}

// 自分の攻撃(AA)
if ($attack != 7) {
    if ($mecrit == 2){
        $_SESSION["enemyHP"] -= 3;
    }else{
        $_SESSION["enemyHP"] -= 1;
    }
}

if ($_SESSION["enemyHP"] < 1) {
    header("Location:../view/victory.php");
}else if($_SESSION["meHP"] < 1){
    header("Location:../view/defeat.php");
}else{
    header("Location:../view/battle.php");
}

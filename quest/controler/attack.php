<?php
session_start();

$attack = rand(1,10); //命中率
$enemycrit = rand(1,10); //モンスターのcrit
$hard = rand(1,2); 
$skill = $_POST["skill"];
$_SESSION["healmsg"] = "";
$_SESSION["enemyheal"] = "";
$_SESSION["memsg"] = "モンスターに攻撃が当たらなかった";
$_SESSION["enemymsg"] = "自分に攻撃が当たらなかった";

// モンスターの攻撃
if ($attack != 1) {
    if ($enemycrit % 3 == 0){
        $_SESSION["meHP"] -= 4;
        $_SESSION["enemymsg"] = "自分に4ダメージ";
    }else{
        $_SESSION["meHP"] -= 1;
        $_SESSION["enemymsg"] = "自分に1ダメージ";
    }
}
if ($_SESSION["level"] == 5) { // レベル5の時、モンスターが50％の確率で2回復
    if ($hard == 2){
        $_SESSION["enemyHP"] += 2;
        $_SESSION["enemyheal"] = "モンスターの体力が2回復";        
    }
}
if ($_SESSION["level"] == 6) { // レベル6の時、5％の確率で即死
    if ($enemycrit == 2){
        if ($hard == 2) {
            $_SESSION["meHP"] -= 30;
            $_SESSION["enemymsg"] = "自分に30ダメージ";            
        }
    }
}


// 自分の攻撃(skill)
if ($skill == 1) {
    if ($attack != 8) { // 命中率90％
        if ($_SESSION["level"] == 4) { // レベル4の時、命中率が半分
            if ($hard == 1){
                $_SESSION["enemyHP"] -= 2;
                $_SESSION["memsg"] = "モンスターに2ダメージ";        
            }
        }else{
            $_SESSION["enemyHP"] -= 2;
            $_SESSION["memsg"] = "モンスターに2ダメージ";    
        }
    }
}elseif ($skill == 2) {
    if ($attack > 3) { // 命中率70%
        if ($_SESSION["level"] == 4) {
            if ($hard == 1){
                $_SESSION["enemyHP"] -= 3;
                $_SESSION["memsg"] = "モンスターに3ダメージ";        
            }
        }else{
            $_SESSION["enemyHP"] -= 3;
            $_SESSION["memsg"] = "モンスターに3ダメージ";    
        }
    }
}elseif ($skill == 3) {
    if ($attack > 5) { // 命中率50%
        if ($_SESSION["level"] == 4) {
            if ($hard == 1){
                $_SESSION["enemyHP"] -= 4;
                $_SESSION["memsg"] = "モンスターに4ダメージ";        
            }
        }else{
            $_SESSION["enemyHP"] -= 4;
            $_SESSION["memsg"] = "モンスターに4ダメージ";    
        }
    }
}elseif ($skill == 4) {
    if ($attack == 7) { // 命中率10%
        if ($_SESSION["level"] == 4) {
            if ($hard == 1){
                $_SESSION["enemyHP"] -= 20;
                $_SESSION["memsg"] = "モンスターに20ダメージ";        
            }
        }else{
            $_SESSION["enemyHP"] -= 20;
            $_SESSION["memsg"] = "モンスターに20ダメージ";    
        }
    }
}


if ($_SESSION["enemyHP"] < 1) {
    header("Location:../view/victory.php");
}else if($_SESSION["meHP"] < 1){
    header("Location:../view/defeat.php");
}else{
    header("Location:../view/battle.php");
}

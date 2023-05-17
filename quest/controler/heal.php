<?php
    session_start();
    $heal = $_POST["heal"];
    if ($heal == 1) {
        if ($_SESSION["meHP"] <= 5) {
            if ($_SESSION["healcount"] < 3) {
                $_SESSION["meHP"] += 3;
                $_SESSION["healcount"] += 1;
            }else{
                $_SESSION["healmsg"] = "回復薬が残っていません";
            }
        }else{
            $_SESSION["healmsg"] = "体力が5以下じゃないと使えません";
        }    
    }elseif ($heal == 2) {
        if ($_SESSION["meHP"] <= 5) {
            if ($_SESSION["healgcount"] < 1) {
                $_SESSION["meHP"] += 5;
                $_SESSION["healgcount"] += 1;
            }else{
                $_SESSION["healmsg"] = "回復薬グレートが残っていません";
            }
        }else{
            $_SESSION["healmsg"] = "体力が5以下じゃないと使えません";
        }
    
    }
    
    header("Location:../view/battle.php");
<?php
    session_start();
    $nobighart ="<img src='../img/hart2.png' width='100px'>";
    $nohart = "<img src='../img/hart2.png' width='50px'>";
    $meHP = $_SESSION["meHP"];
    $enemyHP = $_SESSION["enemyHP"];
    // 自分のハートの数の変数
    $mehart = $meHP % 5;
    $big = $meHP - $mehart;
    $mebighart = $big / 5;
    // モンスターのハートの数の変数
    $enemyhart = $enemyHP % 5;
    $enemybig = $enemyHP - $enemyhart;
    $enemybighart = $enemybig / 5;



    // 自分の体力
    function mehart() {
        global $mehart;
        global $mebighart;
        for ($a=0; $a < $mebighart; $a++) { 
            echo "<img src='../img/hart.png' width='50px'>";
        }
        for ($b=0; $b < $mehart; $b++) { 
            echo "<img src='../img/hart.png' width='30px'>";
        }
    }
    // モンスターの体力
    function enemyhart() {
        global $enemybighart;
        global $enemyhart;
        for ($c=0; $c < $enemybighart; $c++) { 
            echo "<img src='../img/hart.png' width='50px'>";
        }
        for ($d=0; $d < $enemyhart; $d++) { 
            echo "<img src='../img/hart.png' width='30px'>";
        }
    }

    // 与えたダメージ与えられたダメージをセッションに加算していってその値の分だけnohartを出力する
?>
<?php
error_reporting(E_ALL & ~E_NOTICE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>戦闘画面</title>
    <style type="text/css">
        p {color:red;}
    </style>
</head>
<body>
    <?php
        session_start();
        error_reporting(E_ALL & ~E_NOTICE);
        if ($_SESSION["level"] >= 4) {
            if ($_SESSION["level"] == 4){
                echo "強いモンスターが現れた！";
                echo "このモンスターは技を半分の確率で回避します";
            }elseif ($_SESSION["level"] == 5) {
                echo "強いモンスターが現れた！";
                echo "このモンスターは50%の確率で体力を2回復します";
            }elseif ($_SESSION["level"] == 6) {
                echo "強いモンスターが現れた！";
                echo "このモンスターは5%の確率で鎮魂歌を使います";  
            }
        }else{
            echo "モンスターが現れた！";
        }
    ?>
    <br>
    <img src=<?php echo $_SESSION["monster"]; ?> width='400px'>

    <?php require('../controler/hart.php'); ?>
    <br>
    モンスターの体力：<?php echo $_SESSION["enemyHP"] ?><br>
    <?php enemyhart() ?>
    <br>
    あなたの体力：<?php echo $_SESSION["meHP"] ?><br>
    <?php mehart() ?>
    <br>
    <br>
    <input type="button" value="たたかう" onclick="Click_Sub()">
    <div id="div1">
        <form action="../controler/attack.php" method="post">
            <button type="submit" name="skill" value="1">ひのこ</button>
            <button type="submit" name="skill" value="2">かえんほうしゃ</button>
            <br>
            <?php
                if ($_SESSION["level"] >= 3) {
                    echo '<button type="submit" name="skill" value="3">はかいこうせん</button>';
                    echo '<button type="submit" name="skill" value="4">鎮魂歌</button>';
                }elseif ($_SESSION["level"] == 2) {
                    echo '<button type="submit" name="skill" value="3">はかいこうせん</button>';
                    echo '<button type="submit" name="skill" value="4" disabled>鎮魂歌</button>';
                }else{
                    echo '<button type="submit" name="skill" value="3" disabled>はかいこうせん</button>';
                    echo '<button type="submit" name="skill" value="4" disabled>鎮魂歌</button>';
                }
            ?>
        </form>
    </div>
    <br>
        <form action="../controler/heal.php" method="post">
        <button type="submit" name="heal" value="1">回復薬</button>
        <button type="submit" name="heal" value="2">回復薬グレート</button>
        </form>

        <p><?php echo $_SESSION["healmsg"]; ?></p>

        モンスターの攻撃
        <br>
        <?php echo $_SESSION["enemymsg"]; ?>
        <br>
        <?php echo $_SESSION["enemyheal"]; ?>
        <br>
        自分の攻撃
        <br>
        <?php echo $_SESSION["memsg"]; ?>

        <br>
        <br>
        技説明<br>
        ひのこ(ダメージ2 命中率90%)<br>
        かえんほうしゃ(ダメージ3 命中率70%)<br>
        はかいこうせん(ダメージ4 命中率50%)<br>
        鎮魂歌(ダメージ20 命中率10%)<br>

    <script language="Javascript">
        document.all.div1.style.display ="none";
    function Click_Sub() {
        if (document.all.div1.style.display == "none") {
            document.all.div1.style.display = "block"
        } else {
            document.all.div1.style.display = "none"
        }
    }
    </script>
</body>
</html>
<?php
    session_start();
    $_SESSION["level"] = 1;
    header("Location:../view/index.php");
?>
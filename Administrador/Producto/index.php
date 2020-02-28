<?php
    session_start();
    $_SESSION["PantallaCentral"] = 100;
    header("location: ../../index.php");
?>
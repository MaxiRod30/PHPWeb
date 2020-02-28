<?php
    session_start();
    $_SESSION["PantallaCentral"] = 101;
    header("location: ../../index.php");
?>
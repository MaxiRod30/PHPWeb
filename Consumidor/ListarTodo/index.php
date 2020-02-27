<?php
    session_start();
    $_SESSION["PantallaCentral"] = 1;
    header("location: ../../index.php");
?>
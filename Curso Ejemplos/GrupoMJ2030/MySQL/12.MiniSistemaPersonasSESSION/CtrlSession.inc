<?php
    // CONTROL DE SESSION
    session_start();
    if (!isset($_SESSION["nombreLogueado"])) {
        // mensaje de error
        header("Location: errorPage.php?MSG=debe inciar sesión");
    } // endif
?>
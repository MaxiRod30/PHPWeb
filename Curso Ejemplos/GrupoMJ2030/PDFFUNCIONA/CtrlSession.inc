<?php
    // CONTROL DE SESSION
    session_start();
    if (!isset($_SESSION["nombreLogueado"])) {
        // mensaje de error
        header("Location: errorPage.php?MSG=debe inciar sesión");
    } else {
        // chequear cookie
        if (isset($_COOKIE["login"])) {
            // resetear (pisar)
            setcookie("login","usrOK",time()+60000);
        } else {
            // enviar mensaje
            header("Location: errorPage.php?MSG=la sesión ha caducado, inicie nuevamente");
        } // endif
    } //  endif
?>
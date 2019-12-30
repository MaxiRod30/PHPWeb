<?php
    $cookie_name = "CK_login";
    $session_name = "nombreLogueado";

    // CONTROL DE SESSION
    session_start();

    if (!isset($_SESSION[$session_name])) {
        // mensaje de error()
        header("Location: LoginAndRegister/FormLogin.php");
    } else {
        // chequear cookie

        if (isset($_COOKIE[$cookie_name])) {
            // resetear Tiempo de la cookie 
            setcookie($cookie_name,"usrOK",time()+6000);
        } else {
            // enviar mensaje
            // session_destroy();
            header("Location: LoginAndRegister/FormLogin.php");
        } // endif
    } //  endif
?>
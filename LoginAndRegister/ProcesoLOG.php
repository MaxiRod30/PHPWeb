<?php
    // PROCESO LOGIN
    // conectar al servidor
    include "../conexionBASE.php";

    // capturar datos del formulario
    $usuario    = utf8_encode($_POST["nameUSER"]);
    $password   = md5(utf8_encode($_POST["namePASS"]));

    // crear sentencia para control de usuario
    $sql  = "SELECT usersNAME,usersPASS,usersNOM FROM proyecto_web20.users WHERE usersNAME='$usuario' AND usersPASS='$password'";

    // ejecutar sentencia
    $result = mysql_query($sql,$conex);
    // controlar exitencia
    
    if (mysql_num_rows($result)==0) {
        // enviar mensaje de error
        header("location: ../Error/errorPage.php?MSG=Usuario y/o contraseña incorrectos  $usuario   $password");
    } else {

        while ($regDTO = mysql_fetch_array($result)) {
            
            $nombreUSER  = utf8_encode($regDTO["usersNOM"]);
            
        }
        // crear sesión
        session_start();
        // guardar en sesión el nombre del usuario
        $_SESSION["nombreLogueado"] =  $nombreUSER;
        // crear cookie
        setcookie("CK_login","usrOK",time()+60,"/BIOS/Proyecto");
        // redirigir a bienvenida
        header("location: ../index.php");
    } // endif

?>
<?php
    // PROCESO LOGIN
    
    // conectar al servidor
    include "conexion.inc";
    // capturar datos del formulario
    $usuario    = utf8_encode($_POST["USR"]);
    $password   = md5(utf8_encode($_POST["PSW"]));
    // crear sentencia para control de usuario
    $sql  = "SELECT * FROM usuarios WHERE ";
    $sql .= "usrNAME='$usuario' AND usrPASS='$password'";
    // ejecutar sentencia
    $result = mysql_query($sql,$conex);
    // controlar exitencia
    if (mysql_num_rows($result)==0) {
        // enviar mensaje de error
        header("location: errorPage.php?MSG=Usuario y/o contraseña incorrectos");
    } else {
        // crear sesión
        session_start();
        // guardar en sesión el nombre del usuario
        $_SESSION["nombreLogueado"] = $usuario;
        // crear cookie
        setcookie("login","usrOK",time()+60);
        // redirigir a bienvenida
        header("location: Bienvenida.php");
    } // endif

?>
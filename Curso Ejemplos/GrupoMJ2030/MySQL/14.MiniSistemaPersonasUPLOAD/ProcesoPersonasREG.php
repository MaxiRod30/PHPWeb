<?php
    // PROCESO PERSONAS REG - MySQL
    
    // conectar al servidor
    include "conexion.inc";
    // capturar y convertir datos del formulario
    $usuario    = utf8_decode($_POST["USR"]);
    $password   = md5(utf8_decode($_POST["PSW"]));
    // controlar exitencia
    $sql = "SELECT * FROM usuarios WHERE usrNAME='$usuario'";
    // ejecutar sentencia de control
    $result = mysql_query($sql,$conex);
    // determinar exitencia
    if (mysql_num_rows($result)==0) {
        // crear sentencia SQL para insertar
        $sql  = "INSERT INTO usuarios ";
        $sql .= "(usrNAME,usrPASS) ";
        $sql .= "VALUES ";
        $sql .= "('$usuario','$password')";
        // ejecutar sentencia SQL
        mysql_query($sql,$conex);
        // cerrar conexión
        mysql_close($conex);
        // volver automáticamente al formulario (redirigir)
        header("location: FormPersonasLOG.php");        
    } else {
        // cerrar conexión
        mysql_close($conex);        
        // enviar mensaje de error
        header("location: errorPage.php?MSG=el usuario ya exite");        
    } // endif

?>
<?php
    // PROCESO PERSONAS REG - MySQL
    
   // conectar al servidor
   include "../conexionBASE.php";

    // capturar y convertir datos del formulario
    $nombre    = utf8_decode($_POST["nameNOM"]);
    $usuario    = utf8_decode($_POST["nameUSER"]);
    $password   = md5(utf8_decode($_POST["namePASS"]));
    $privilegio = "Consumidor";
    // controlar exitencia
    $sql = "SELECT * FROM users WHERE usersNAME='$usuario'";
    // ejecutar sentencia de control
    $result = mysql_query($sql,$conex);
    // determinar exitencia
    if (mysql_num_rows($result)==0) {
        // crear sentencia SQL para insertar
        $sql  = "INSERT INTO users ";
        $sql .= "(usersID,usersNAME,usersPASS,usersNOM,usersPRIVI) ";
        $sql .= "VALUES ";
        $sql .= "(null, '$usuario','$password','$nombre','$privilegio')";
        // ejecutar sentencia SQL
        mysql_query($sql,$conex);
        // cerrar conexión
        mysql_close($conex);
        // volver automáticamente al formulario (redirigir)
        header("location: FormLogin.php");        
    } else {
        // cerrar conexión
        mysql_close($conex);        
        // enviar mensaje de error
        header("location: errorPage.php?MSG=el usuario ya exite");        
    } // endif

?>
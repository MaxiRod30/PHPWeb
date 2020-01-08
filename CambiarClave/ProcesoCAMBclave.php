<?php
    // PROCESO PERSONAS REG - MySQL
    
   // conectar al servidor
   include "../conexionBASE.php";

   include "../CtrlSession.php"; 

    // capturar y convertir datos del formulario
    $usuario = $_SESSION["nombreLogueado"];
    $password   = md5(utf8_decode($_POST["namePASSnue"]));
    // controlar exitencia
    $sql = "UPDATE users SET usersPASS=$password where usersNAME=$usuario";
    // ejecutar sentencia de control
    $result = mysql_query($sql,$conex);
    // determinar exitencia
    mysql_close($conex);   

    header("Location: ../paginaDeSeCambioCorrectamente.php"); 

?>
<?php
    // PROCESO PERSONAS REG - MySQL
    
   // conectar al servidor
   include "../conexionBASE.php";

   include "../CtrlSession.php"; 

    // capturar y convertir datos del formulario userLogueado
    $usuario = $_SESSION["nombreLogueado"];
    $userLOG = $_SESSION["userLogueado"];
    $passwordNEW1 = $_POST["namePASSnue"];
    $passwordOLD1 = $_POST["namePASSant"];

    $passwordNEW   = md5(utf8_decode($_POST["namePASSnue"]));
    $passwordOLD = md5(utf8_decode($_POST["namePASSant"]));

    // crear sentencia para control de usuario
    $sql  = "UPDATE users SET usersPASS='$passwordNEW' where usersNAME='$userLOG' AND usersPASS='$passwordOLD' ";

       // ejecutar sentencia
       $result = mysql_query($sql,$conex);
       // controlar exitencia

       if (mysql_affected_rows($conex) > 0) {
           
            header("Location: ../DatosOK/CambioContraOK.php");  
       } 
       else {
            header("location: ../Error/errorCambioPASS.php");
        }
        
        mysql_close($conex);
?>
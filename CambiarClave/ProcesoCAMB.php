<?php
    // conectar al servidor
    include "../conexionBASE.php";
    include "../CtrlSession.php"; 

    $usuario = $_SESSION["nombreLogueado"];
    // capturar dato de la URL
    $password =md5(utf8_encode($_GET["NAME"]));
    // crear sentencia SQL para buscar nombre
    $sql = "SELECT usersNAME,usersPASS FROM proyecto_web20.users WHERE usersPASS='$password' AND usersNOM='$usuario';";
    // die "variable ".$idUSR;
    // ejecutar sentencia SQL
    $result = mysql_query($sql,$conex);
   
    if (mysql_num_rows($result)!=0) {
        // enviar mensaje de error
        echo "../Image/tick-verde.jpg";
    }
    else
        {  
        echo "../Image/tick-rojo.jpg";
        }

    mysql_close($conex);
?>
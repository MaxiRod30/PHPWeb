<?php
    // conectar al servidor
    include "../conexionBASE.php";
    // capturar dato de la URL

    $idUSR = $_GET["IDUSR"];
    // crear sentencia SQL para buscar nombre
    $sql = "SELECT usersNAME FROM proyecto_web20.users WHERE usersNAME='$idUSR';";
    // die "variable ".$idUSR;
    // ejecutar sentencia SQL
    $result = mysql_query($sql,$conex);
   
    if (mysql_num_rows($result)==0) {
        // enviar mensaje de error
        echo "../Image/tick-verde.jpg";
    }
    else
        {  
        echo "../Image/tick-rojo.jpg";
        }

    mysql_close($conex);
?>
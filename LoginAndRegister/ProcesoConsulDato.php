<?php
    // conectar al servidor
    include "../conexionBASE.php";
    // capturar dato de la URL

    $idUSR = $_GET["ID"];
    // crear sentencia SQL para buscar nombre
    $sql = "SELECT usersNAME FROM proyecto_web20.users WHERE usersNAME='$idUSR';";
    // die "variable ".$idUSR;
    // ejecutar sentencia SQL
    $result = mysql_query($sql,$conex);
 
    if (mysql_num_rows($result)==0) {
        // enviar mensaje de error
        echo "none";
    }
    else
        {  
        echo "OK";
        }

    mysql_close($conex);
?>
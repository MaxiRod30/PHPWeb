<?php
    // PROCESO PERSONAS UPD
    
    // controlar logueado
    include "../../CtrlSession.php";
    
    // conectar al Servidor de Base de Datos
    include "../../conexionBASE.php";
    // cargar y convertir datos del formulario
    $id             = utf8_decode($_POST["nameID"]);
    $nombre         = utf8_decode($_POST["nameMarca"]);
    // crear sentencia SQL para modificar registro
    $sql  = "UPDATE marcas SET marcasNOM='$nombre' WHERE marcasID='$id'";

    // depurar instrucción SQL
    // die($sql);
    // ejecutar sentencia SQL
    mysql_query($sql,$conex);
    // cerrar conexión
    mysql_close($conex);
    // volver al formulario de actualización
    header("Location: ../../index.php");                            
?>
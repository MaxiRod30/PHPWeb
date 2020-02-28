<?php
    
    // controlar logueado
    include "../../CtrlSession.php";
    // conectar al Servdior de Base de Datos
    include "../../conexionBASE.php";
    // capturar ID para eliminar
    $id = $_GET["ID"];
    // capturar orden
    $orden  = $_GET["ORD"];    
    // capturar tipo
    $tipo   = $_GET["TIPO"];
    // crear sentencia SQL para eliminar registro
    $sql = "DELETE FROM marcas WHERE marcasID=$id";
    // die($sql);
    // ejecutar sentencia SQL
    mysql_query($sql,$conex);
    // redirigir al listado
    header("Location: ../../index.php?ORD=$orden&TIPO=$tipo");   

?>
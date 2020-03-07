<?php
    // PROCESO DEL
    // elimina un registro enviado desde el listado
    // además captura el filtro, orden y tipo para
    // reenviarlo al proceso de listar

    // conectar al Servdior de Base de Datos
    include "conexion.inc";
    // capturar ID para eliminar
    $id = $_GET["ID"];
    // capturar filtro
    $filtro = $_GET["DTO"];
    // capturar orden
    $orden  = $_GET["ORD"];    
    // capturar tipo
    $tipo   = $_GET["TIPO"];
    // crear sentencia SQL para eliminar registro
    $sql = "DELETE FROM personas WHERE idPERS=$id";
    // ejecutar sentencia SQL
    mysql_query($sql,$conex);
    // redirigir al listado
    header("Location: ProcesoPersonasVER.php?DTO=$filtro&ORD=$orden&TIPO=$tipo");    
?>
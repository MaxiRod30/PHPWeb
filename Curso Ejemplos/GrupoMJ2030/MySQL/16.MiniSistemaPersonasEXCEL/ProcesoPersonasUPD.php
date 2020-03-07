<?php
    // PROCESO PERSONAS UPD
    
    // conectar al Servidor de Base de Datos
    include "conexion.inc";
    // cargar y convertir datos del formulario
    $id             = $_POST["ID"];
    $nombre         = utf8_decode($_POST["NOM"]);
    $direccion      = utf8_decode($_POST["DIR"]);
    $telefono       = $_POST["TEL"];
    $departamento   = $_POST["DTO"];
    // crear sentencia SQL para modificar registro
    $sql  = "UPDATE personas SET ";
    $sql .= "nomPERS='$nombre', ";
    $sql .= "dirPERS='$direccion', ";
    $sql .= "telPERS='$telefono', ";
    $sql .= "dtoPERS=$departamento ";
    $sql .= "WHERE idPERS=$id";
    // depurar instrucción SQL
    // die($sql);
    // ejecutar sentencia SQL
    mysql_query($sql,$conex);
    // cerrar conexión
    mysql_close($conex);
    // volver al formulario de actualización
    header("Location: FormPersonasUPD.php");                            
?>

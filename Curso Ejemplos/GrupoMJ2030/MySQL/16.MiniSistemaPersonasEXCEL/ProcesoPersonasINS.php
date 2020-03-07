<?php
    // PROCESO PERSONAS INS - MySQL
    
    // conectar al servidor
    include "conexion.inc";
    // capturar y convertir datos del formulario
    $nombre         = utf8_decode($_POST["NOM"]);
    $direccion      = utf8_decode($_POST["DIR"]);
    $telefono       = $_POST["TEL"];
    $departamento   = $_POST["DTO"];
    // crear sentencia SQL para insertar
    $sql  = "INSERT INTO personas ";
    $sql .= "(idPERS,nomPERS,dirPERS,telPERS,dtoPERS) ";
    $sql .= "VALUES ";
    $sql .= "(null,'$nombre','$direccion','$telefono',$departamento)";
    // ejecutar sentencia SQL
    mysql_query($sql,$conex);
    // cerrar conexión
    mysql_close($conex);
    // volver automáticamente al formulario (redirigir)
    header("location: FormPersonasINS.php");
?>
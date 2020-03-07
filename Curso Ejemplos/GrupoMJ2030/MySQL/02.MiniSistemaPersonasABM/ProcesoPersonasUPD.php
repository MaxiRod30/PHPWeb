<?php
    // PROCESO PERSONAS UPD
    
    // conectar al Servidor de Base de Datos
    $conex = mysql_connect("localhost","root","");
    // controlar conexión
    if (!$conex) {
        die("ATENCION!!!.. NO se pudo CONECTAR al SERVIDOR de Base de Datos");
    } // endif
    // seleccionar Base de Datos
    $selDB = mysql_select_db("grupomj2030",$conex);
    // controlar selección de Base de Datos
    if (!$selDB) {
        die("ATENCION!!!.. NO se pudo SELECCIONAR Base de Datos");
    } // endif
    // cargar y convertir datos del formulario
    $id             = $_POST["ID"];
    $nombre         = utf8_decode($_POST["NOM"]);
    $direccion      = utf8_decode($_POST["DIR"]);
    $telefono       = $_POST["TEL"];
    $departamento   = utf8_decode($_POST["DTO"]);
    // crear sentencia SQL para modificar registro
    $sql  = "UPDATE personas SET ";
    $sql .= "nomPERS='$nombre', ";
    $sql .= "dirPERS='$direccion', ";
    $sql .= "telPERS='$telefono', ";
    $sql .= "dtoPERS='$departamento' ";
    $sql .= "WHERE idPERS=$id";
    // depurar instrucción SQL
    // die($sql);
    // ejecutar sentencia SQL
    mysql_query($sql,$conex);
    // cerrar conexión
    mysql_close($conex);
    // volver al formulario de actualización
    header("Location: FormPersonasUPD.html");                            
?>

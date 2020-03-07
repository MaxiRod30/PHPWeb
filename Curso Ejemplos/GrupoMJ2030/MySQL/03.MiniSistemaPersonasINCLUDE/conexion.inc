<?php
    // PROCESO CONEXION AL SERVIDOR
    // conectar al Servidor de Base de Datos
    $conex = mysql_connect("localhost","root","");
    // controlar conexión
    if (!$conex) {
        die("ATENCION!!!... NO se pudo CONECTAR al Servidor de Base de Datos");    
    } // endif
    // seleccionar Base de Datos
    $selDB = mysql_select_db("grupomj2030",$conex);
    // control selección
    if (!$selDB) {
        die("ATENCION!!!... NO se pudo SELECCIONAR Base de Datos");
    } // endif
?>
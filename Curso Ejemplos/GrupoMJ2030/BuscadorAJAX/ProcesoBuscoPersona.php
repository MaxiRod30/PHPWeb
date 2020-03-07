<?php
    // PROCESO BUSCO PERSONA
    
    // conectar al servidor
    $conex = mysql_connect("localhost","root","");
    if (!$conex) {
        die("ATENCION!!.. NO se pudo CONECTAR al SERVIDOR");
    } // endif
    // seleccionar base
    $selDB = mysql_select_db("grupomj2030excel",$conex);
    // capturar dato a buscar
    $nombre = $_GET["NOM"];
    //crear sentencia sql
    $sql = "SELECT * FROM personas WHERE nomPERS LIKE '%$nombre%'";
    // ejectutar senencia SQL
    $result = mysql_query($sql,$conex);
    // cargar registro
    $regPERS = mysql_fetch_array($result);
    // preparar resultado
    $resultado   = $regPERS["idPERS"]." - ";
    $resultado  .= $regPERS["nomPERS"]." - ";
    $resultado  .= $regPERS["dirPERS"]." - ";
    $resultado  .= $regPERS["telPERS"]." - ";
    $resultado  .= $regPERS["dtoPERS"];
    // devolver resultado
    echo $resultado;
    // cerrar conexión
    mysql_close($conex);                 
?>
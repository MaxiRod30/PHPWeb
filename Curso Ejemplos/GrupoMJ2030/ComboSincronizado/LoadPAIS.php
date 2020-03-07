<?php
    // PROCESO LOAD DPTOS
    $conex = mysql_connect("localhost","root","");
    // controlar conexión
    if (!$conex) {
        // enviar mensaje de error
        die("ATENCION!!!.. NO se pudo CONECTAR al SERVIDOR de Base de Datos");
    } // endif
    // seleccionar Base de Datos
    $selDB = mysql_select_db("sincrocombo",$conex);
    // controlar selección
    if (!$selDB) {
        die("ATENCION!!!.. NO se pudo SELECCIONAR Base de Datos");
    } // endif
    // crear sentencia SQL para cargar todos los PAISES
    $sql = "SELECT * FROM paises ORDER by nomPAIS";
    // ejecutar sentencia SQL
    $result = mysql_query($sql,$conex);
    // recorrer y crear options
    while ($regPAIS=mysql_fetch_array($result)) {
        // convertir caracteres
        $idPAIS = $regPAIS["idPAIS"];
        $nomPAIS= utf8_encode($regPAIS["nomPAIS"]);
        // crear option
        echo "<option value='$idPAIS'>$nomPAIS</option>\n";
    } // end while
    // cerrar conexión
    mysql_close($conex);
?>
<?php
    // PROCESO LOAD ESTADO
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
    // capturar dato de la URL
    $idPAIS = $_GET["IDP"];
    // crear sentencia SQL para cargar todos los PAISES
    $sql = "SELECT * FROM estados WHERE idPAIS=$idPAIS ORDER by nomESTADO";
    // ejecutar sentencia SQL
    $result = mysql_query($sql,$conex);
    // recorrer y crear options
    while ($regESTADO=mysql_fetch_array($result)) {
        // convertir caracteres
        $idESTADO = $regESTADO["idESTADO"];
        $nomESTADO= utf8_encode($regESTADO["nomESTADO"]);
        // crear option
        echo "<option value='$idESTADO'>$nomESTADO</option>\n";
    } // end while
    // cerrar conexión
    mysql_close($conex);
?>
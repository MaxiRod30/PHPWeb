<?php
    // PROCESO PERSONAS UPD
    
    // controlar logueado
    include "../../CtrlSession.php";
    
    // conectar al Servidor de Base de Datos
    include "../../conexionBASE.php";
    // cargar y convertir datos del formulario
    $id             = utf8_decode($_POST["nameID"]);
    $nombre         = utf8_decode($_POST["nameMarca"]);

    $sql = "SELECT * FROM marcas WHERE marcasNOM='$nombre'";
    // ejecutar sentencia de control
    $result = mysql_query($sql,$conex);
    // determinar exitencia
    if (mysql_num_rows($result)==0) {
        // crear sentencia SQL para insertar
        $sql  = "UPDATE marcas SET marcasNOM='$nombre' WHERE marcasID='$id'";
        // ejecutar sentencia SQL
        mysql_query($sql,$conex);
        // cerrar conexión
        mysql_close($conex);
     // volver automáticamente al formulario (redirigir)
     header("location: ../../DatosOK/CambioContraOK.php?MSG=Se guardo correctamente la Marca");        
    } else {
        // cerrar conexión
        mysql_close($conex);        
        // enviar mensaje de error
        header("location:  ../../Error/errorPage.php?MSG=La marca ya existe.");   
 } // endif
                      
?>
<?php
    // PROCESO PERSONAS UPD
    
    // controlar logueado
    include "../../CtrlSession.php";
    
    // conectar al Servidor de Base de Datos
    include "../../conexionBASE.php";
    // cargar y convertir datos del formulario
    $id             = utf8_decode($_POST["nameID"]);
    $nombre         = utf8_decode($_POST["nameCategoria"]);
    // crear sentencia SQL para modificar registro
    // controlar exitencia
    $sql = "SELECT * FROM categorias WHERE categoriasNOM='$nombre'";
    // ejecutar sentencia de control
    $result = mysql_query($sql,$conex);
    // determinar exitencia
    if (mysql_num_rows($result)==0) {
        // crear sentencia SQL para insertar
        $sql  = "UPDATE categorias SET categoriasNOM='$nombre' WHERE categoriasID='$id'";

        // ejecutar sentencia SQL
         mysql_query($sql,$conex);
        // cerrar conexión
        mysql_close($conex);
     // volver automáticamente al formulario (redirigir)
     header("location: ../../DatosOK/CambioContraOK.php?MSG=Se guardo correctamente la Categoria");        
 } else {
     // cerrar conexión
     mysql_close($conex);        
     // enviar mensaje de error
     header("location:  ../../Error/errorPage.php?MSG=Categoria ya existe.");   

 } // endif
                           
?>
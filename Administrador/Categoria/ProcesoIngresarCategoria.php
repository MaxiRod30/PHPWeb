<?php
    // PROCESO PERSONAS REG - MySQL
    
   // conectar al servidor
   include "../../conexionBASE.php";

    // capturar y convertir datos del formulario
    $nombreCategoria    = utf8_decode($_POST["nameCategoria"]);
  
    // controlar exitencia
    $sql = "SELECT * FROM categorias WHERE categoriasNOM='$nombreCategoria'";
    // ejecutar sentencia de control
    $result = mysql_query($sql,$conex);
    // determinar exitencia
    if (mysql_num_rows($result)==0) {
        // crear sentencia SQL para insertar
        $sql  = "INSERT INTO categorias(categoriasID,categoriasNOM) VALUES (null, '$nombreCategoria')";

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
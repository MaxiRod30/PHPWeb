<?php
    
    // controlar logueado
    include "../../CtrlSession.php";
    // conectar al Servdior de Base de Datos
    include "../../conexionBASE.php";
    // capturar ID para eliminar
    $id = $_GET["ID"];
    // capturar orden
    $orden  = $_GET["ORD"];    
    // capturar tipo
    $tipo   = $_GET["TIPO"];

    $$nombreCategoria   = $_GET["NOM"];

    $sql = "SELECT * FROM producto WHERE productoCATEG='$id'";
    
    // ejecutar sentencia de control
    $result = mysql_query($sql,$conex);
    // determinar exitencia
    if (mysql_num_rows($result)==0) {
        // crear sentencia SQL para insertar
        
        // crear sentencia SQL para eliminar registro
        $sql = "DELETE FROM categorias WHERE categoriasID='$id'";
        // die($sql);
        // ejecutar sentencia SQL
        mysql_query($sql,$conex);  
        // cerrar conexión
        mysql_close($conex);
        // volver automáticamente al formulario (redirigir)
        header("location: ../../DatosOK/CambioContraOK.php?MSG=Se borro correctamente la Categoria");        
    } else {
        // cerrar conexión
        mysql_close($conex);        
        // enviar mensaje de error
        header("location:  ../../Error/errorPage.php?MSG=La categoria tiene productos asociados.");   
  
    } // endif

?>



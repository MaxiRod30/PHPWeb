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
    // crear sentencia SQL para eliminar registro
    $sql = "SELECT * FROM producto WHERE productoMARCA='$id'";
    // ejecutar sentencia de control
    $result = mysql_query($sql,$conex);
    // determinar exitencia
    if (mysql_num_rows($result)==0) {
        // crear sentencia SQL para insertar
        // crear sentencia SQL para eliminar registro
        $sql = "DELETE FROM marcas WHERE marcasID=$id";
        // die($sql);
        // ejecutar sentencia SQL
        mysql_query($sql,$conex);  
        // cerrar conexión
        mysql_close($conex);
        // volver automáticamente al formulario (redirigir)
        header("location: ../../DatosOK/CambioContraOK.php?MSG=Se borro correctamente la marca");        
    } else {
        // cerrar conexión
        mysql_close($conex);        
        // enviar mensaje de error
        header("location:  ../../Error/errorPage.php?MSG=La marca tiene productos asociados.");   
  
    } // endif

?>
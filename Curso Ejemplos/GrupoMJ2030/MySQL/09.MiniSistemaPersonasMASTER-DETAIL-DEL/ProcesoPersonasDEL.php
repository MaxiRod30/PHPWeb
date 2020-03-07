<?php
    // PROCESO PERSONAS DEL
    
    // conectar al Servidor de Base de Datos
    include "conexion.inc";
    // cargar y convertir datos del formulario
    $id             = $_POST["ID"];
    // crear sentencia SQL para eliminar registro
    $sql  = "DELETE FROM personas WHERE idPERS=$id";
    // depurar instrucción SQL
    // die($sql);
    // ejecutar sentencia SQL
    mysql_query($sql,$conex);
    // cerrar conexión
    mysql_close($conex);
    // volver al formulario de eliminación
    header("Location: FormPersonasDEL.php");                            
?>

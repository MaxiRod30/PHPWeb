<?php
    // MODULO LoadDptosSEL
    
    // generar combo box (lista desplegable) de todos los dptos
    // con el DPTO que le corresponde al ID de persona, seleccionado
    
    // conectar al Servidor
    include "conexion.inc";
    // crear sentencia SQL
    $sql = "SELECT * FROM departamentos ORDER BY nomDTO";
    // ejecutar sentencia SQL
    $result = mysql_query($sql,$conex);
    // confirmar existencia
    if (mysql_num_rows($result)==0) {
        // enviar mensaje de error
        header("Location: errorPage.php?MSG=Debe agregar departamentos");
    } else {
        // generar lista
        while ($regDTO = mysql_fetch_array($result)) {
            $idDTO  = $regDTO["idDTO"];
            $dpto   = utf8_encode($regDTO["nomDTO"]);
            // determinar opción seleccionada
            if ($regDTO["idDTO"]==$regPERS["dtoPERS"]) {
                // marcar opción
                echo "<option value='$idDTO' selected>$dpto</option>\n";    
            } else {
                // crear opción normal
                echo "<option value='$idDTO'>$dpto</option>\n";
            } // endif
        } // end while
        // cerrar conexión
        mysql_close($conex);
    } // endif  


?>
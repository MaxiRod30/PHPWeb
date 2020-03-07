<?php

    // conectar al Servidor
    include "conexionBASE.php";
    // crear sentencia SQL
    $sql = "SELECT * FROM categorias ORDER BY categoriasNOM";
    // ejecutar sentencia SQL
    $result = mysql_query($sql,$conex);
    // confirmar existencia
    if (mysql_num_rows($result)==0) {
        // enviar mensaje de error
        echo "Debe agregar Categorias";
    } else {
        // generar lista
        while ($regs = mysql_fetch_array($result)) {
            $id  = $regs["categoriasID"];
            $categoriasNOM   = utf8_encode($regs["categoriasNOM"]);
            echo "<option value='$id'>$categoriasNOM </option>\n";
        } // end while
        // cerrar conexión
        echo "</select>";
    } // endif  
    mysql_close($conex);

?>
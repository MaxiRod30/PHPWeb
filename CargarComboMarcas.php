<?php
    // conectar al Servidor
    include "conexionBASE.php";
    // crear sentencia SQL
    $sql = "SELECT * FROM marcas ORDER BY marcasNOM";
    // ejecutar sentencia SQL
    $result = mysql_query($sql,$conex);
    // confirmar existencia
    if (mysql_num_rows($result)==0) {
        // enviar mensaje de error
        header("Location: Error/errorPage.php?MSG=Debe agregar Marcas");
    } else {
        // generar lista
        while ($regs = mysql_fetch_array($result)) {
            $id  = $regs["marcasID"];
            $marcasNOM   = utf8_encode($regs["marcasNOM"]);
            echo "<option value='$id'>$marcasNOM </option>\n";
        } // end while
        // cerrar conexión
        mysql_close($conex);
    } // endif  


?>
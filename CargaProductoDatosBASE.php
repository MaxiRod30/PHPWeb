<?php

    include "conexionBASE.php";
    // crear sentencia SQL
    $sql = "SELECT p.productoID, p.productoNOM, p.productoDESCRIP, p.productoPRECIO, m.marcasNOM, c.categoriasNOM,pai.paisesNOM, p.productoACT
    FROM producto AS p
    INNER JOIN marcas AS m
    INNER JOIN paises AS pai
    INNER JOIN categorias AS c
    ON (p.productoMARCA = m.marcasID) AND (p.productoCATEG = c.categoriasID) AND (p.productoPAIS = pai.paisesID)";
    
    // ejecutar sentencia SQL
    $result = mysql_query($sql,$conex);
    // confirmar existencia
    if (mysql_num_rows($result)==0) {
        // enviar mensaje de error
        header("Location: errorPage.php?MSG=Debe agregar departamentos");
    } else {
        // generar lista
        while ($regPRD = mysql_fetch_array($result)) {
            
            $prdID  = $regPRD["productoID"];
            $prdNOM  = utf8_encode($regPRD["productoNOM"]);
            $prdDESCRIP  = utf8_encode($regPRD["productoDESCRIP"]);
            $prdPRECIO  = utf8_encode($regPRD["productoPRECIO"]);
            $marcNOM  = utf8_encode($regPRD["marcasNOM"]);
            $catNOM  = utf8_encode($regPRD["categoriasNOM"]);
            $paiNOM  = utf8_encode($regPRD["paisesNOM"]);
            $prdACT  = utf8_encode($regPRD["productoACT"]);

            echo "<option value='$idDTO'>$dpto</option>\n";
        } // end while
        // cerrar conexión
        mysql_close($conex);
    } // endif  


?>
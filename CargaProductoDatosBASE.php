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
    } else 
    {
        // generar lista
        $i=0;
        while($regPRD = mysql_fetch_array($result))
        {

            $i = $i + 1;
            $prdID  = $regPRD["productoID"];
            $prdNOM  = utf8_encode($regPRD["productoNOM"]);
            $prdDESCRIP  = utf8_encode($regPRD["productoDESCRIP"]);
            $prdPRECIO  = utf8_encode($regPRD["productoPRECIO"]);
            $marcNOM  = utf8_encode($regPRD["marcasNOM"]);
            $catNOM  = utf8_encode($regPRD["categoriasNOM"]);
            $paiNOM  = utf8_encode($regPRD["paisesNOM"]);
            $prdACT  = utf8_encode($regPRD["productoACT"]);

            if ($i=1)
            {
                echo "<tr>";
            }
            echo "
                <th>
                    <div class='w3-row-padding w3-padding-16 w3-center' id='food'>
                        <div class='w3-quarter'>
                            <img src='/w3images/sandwich.jpg' alt='Sandwich' style='width:100%'>
                            <h3>The Perfect Sandwich, A Real NYC Classic</h3>
                            <p>Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.</p>
                        </div>
                    </div> 
                </th>
            "; 
            if ($i=3) 
            {
                $i=0;
                echo "</tr>";  
            }
        } // end while
    
        // cerrar conexión
        mysql_close($conex);
    }


?>

<?php

    include "conexionBASE.php";
    // crear sentencia SQL
    $sql = "SELECT p.productoID, p.productoNOM, p.productoDESCRIP, p.productoPRECIO, m.marcasNOM, c.categoriasNOM,p.productoPAIS, p.productoACT , p.productoIMG
    FROM producto AS p
    INNER JOIN marcas AS m
    INNER JOIN categorias AS c
    ON (p.productoMARCA = m.marcasID) AND (p.productoCATEG = c.categoriasID)
    WHERE p.productoACT='Activo'";
    
    // ejecutar sentencia SQL
    $result = mysql_query($sql,$conex);
    // confirmar existencia
    if (mysql_num_rows($result)==0) {
        // enviar mensaje de error
        header("Location: ../../Error/errorPage.php?MSG=No hay datos");
    } else 
    {
        // generar lista

        echo "<tr> <hr>";
        $num = 0;
        while($regPRD = mysql_fetch_array($result))
        {
            
            $prdID  = $regPRD["productoID"];
            $prdNOM  = utf8_encode($regPRD["productoNOM"]);
            $prdDESCRIP  = utf8_encode($regPRD["productoDESCRIP"]);
            $prdPRECIO  = utf8_encode($regPRD["productoPRECIO"]);
            $marcNOM  = utf8_encode($regPRD["marcasNOM"]);
            $catNOM  = utf8_encode($regPRD["categoriasNOM"]);
            $paiNOM  = utf8_encode($regPRD["productoPAIS"]);
            $prdACT  = utf8_encode($regPRD["productoACT"]);
            $fotoIMG = "BIOS/Proyecto/".utf8_encode($regPRD["productoIMG"]);

            // Separo las 3 columnas en la pagina INDEX
            if(($num % 3) == 0 )
            {   
                echo "</tr>";
                echo "<tr>";
            }
            echo "
                <th class= 'celda'>
                    <h3>  $prdNOM </h3>
                    <img class='celdaImg' src='$fotoIMG' alt='Foto producto'>
                    <div class='texto'>
                        <p> $prdDESCRIP</p>
                    </div>
                    <p> Marca: $marcNOM </p>
                    <p> Categoria: $catNOM </p>
                    <p> País: $paiNOM </p>
                    <p> USD $prdPRECIO</p>
                </th>
            "; 
            $num= $num + 1;
        } // end while
        // El caso que quede incompleta cierro la tabla
        if(($num % 3) != 0 )
        {   
            echo "</tr>";
        }


        // cerrar conexión
        mysql_close($conex);
    }


?>
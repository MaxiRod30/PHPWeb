<?php
        // conectar al servidor
        die($sql);
        include "../../conexionBASE.php"; 

        if (isset($_GET["ORD"])) {
            // cargar orden especificado
            $orden = $_GET["ORD"];    
        } else {
            // establecer orden por defecto
            $orden = "productoID";
        }  
        // determinar tipo de orden
        if (isset($_GET["TIPO"])) {
                // cargar tipo de orden especicado
            $tipoOrden =$_GET["TIPO"];
        } else {
                // establecer tipo de orden por defecto
                $tipoOrden = "ASC";
        }  

        $sql  = "SELECT p.productoID,p.productoNOM,p.productoDESCRIP,p.productoPRECIO,m.marcasNOM,c.categoriasNOM,p.productoPAIS,p.productoIMG,p.productoACT ";
        $sql .= "FROM producto AS p ";
        $sql .= "JOIN marcas AS m ";
        $sql .= "JOIN categorias AS c ";
        $sql .= "ON p.productoMARCA = m.marcasID AND p.productoCATEG = c.categoriasID ";
        $sql .= "ORDER BY $orden $tipoOrden";

        // ejecutar sentencia de control
        $result = mysql_query($sql,$conex);

        if (mysql_num_rows($result)==0) {
            // enviar mensaje de error
            header("Location: Error/errorPage.php?MSG=No existen datos para el mostrar / $orden  / $tipoOrden / $sql");
        } // endif
        // crear cabecera de grilla de datos
         while ($regs = mysql_fetch_array($result)) {
            // convertir caracteres
            $idProducto             = $regs["productoID"];
            $nombreProducto        = utf8_encode($regs["productoNOM"]);    
            $descripcionProducto        = utf8_encode($regs["productoDESCRIP"]);    
            $precioProducto        = utf8_encode($regs["productoPRECIO"]); 
            $marcaProducto        = utf8_encode($regs["marcasNOM"]); 
            $categoriaProducto        = utf8_encode($regs["categoriasNOM"]);    
            $paisProducto        = utf8_encode($regs["productoPAIS"]);  
            $fotoaux        = utf8_encode($regs["productoIMG"]);  
            $fotoProducto = "BIOS/Proyecto/".$fotoaux ;
            $estadoProducto        = utf8_encode($regs["productoACT"]);    

            echo "<tr>\n";
            echo " <td style='text-align: right;'>$idProducto</td>\n";             
            echo " <td>$nombreProducto</td>\n";  
            echo " <td>$descripcionProducto</td>\n";     
            echo " <td>$precioProducto</td>\n";      
            echo " <td>$marcaProducto</td>\n";   
            echo " <td>$categoriaProducto</td>\n";   
            echo " <td>$paisProducto  </td>\n"; 
            echo " <td>$estadoProducto   </td>\n";    
            echo " <td  style='text-align: center;'>\n";
            echo "    <img  class = 'foto' src='$fotoProducto'/>";
            echo " </td>\n";
            echo " <td  style='text-align: center;'>\n";
            echo "  <a href='Administrador/Categoria/ProcesoModificarCategoria.php?ID= $idProducto '>\n";
            echo "    <img class='btn' src='Image/icoUPD2.jpg' />";
            echo "  </a>\n";
            echo " </td>\n";
                                                                     
            echo "</tr>\n";
        } // end while
        // cerrar conexión
        mysql_close($conex);
?>
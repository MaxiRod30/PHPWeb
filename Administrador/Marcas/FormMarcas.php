
<?php

echo '
    <div class="boxRegistro">
    <h1>Ingreso de Marca</h1>
        <form id="dataFRM_MARCAS" action="Administrador/Marcas/ProcesoIngresarMarcas.php" method="POST" class="formulario">
            <hr>
            <label id="icon" for="name"><i class="icon-user"></i></label>
            <input type="text" name="nameMarca" id="idMarca" placeholder="Ingrese nombre de la Marca" required/>
            <hr>
            <a href="#" class="button" onclick="CheckMARCA()">Guardar Marca</a>
        </form>
    ';
echo '    
    <div id="contenido">
    <fieldset id="dsc">
     <legend>Listado</legend>
        <table id="lst">';

        // conectar al servidor
        include "conexionBASE.php"; 

        if (isset($_GET["ORD"])) {
            // cargar orden especificado
            $orden = $_GET["ORD"];    
        } else {
            // establecer orden por defecto
            $orden = "marcasID";
        }  
        // determinar tipo de orden
        if (isset($_GET["TIPO"])) {
                // cargar tipo de orden especicado
            $tipoOrden =$_GET["TIPO"];
        } else {
                // establecer tipo de orden por defecto
                $tipoOrden = "ASC";
        }  


        $sql = "SELECT * FROM marcas ORDER BY $orden $tipoOrden";

        // ejecutar sentencia de control
        $result = mysql_query($sql,$conex);

        if (mysql_num_rows($result)==0) {
            // enviar mensaje de error
            header("Location: ../../Error/errorPage.php?MSG=No existen datos para el mostrar / $orden  / $tipoOrden / $sql");
        } // endif
        // crear cabecera de grilla de datos
        echo "
         <tr>
           <th>
             <a href='index.php?ORD=marcasID&TIPO=asc'>
               <img class='btn' src='Image/btnUp.png' />
             </a>  
             ID Marcas
             <a href='index.php?ORD=marcasID&TIPO=desc'>
               <img class='btn' src='Image/btnDown.png' />
             </a>               
           </th>
           <th>
             <a href='index.php?ORD=marcasNOM&TIPO=asc'>
               <img class='btn' src='Image/btnUp.png' />
             </a>  
             MARCAS
             <a href='index.php?ORD=marcasNOM&TIPO=desc'>
               <img class='btn' src='Image/btnDown.png' />
             </a>               
           </th>
           <th>
             UPD
           </th>
           <th>
             DEL
           </th>            
         </tr>
         ";

         while ($regs = mysql_fetch_array($result)) {
            // convertir caracteres
            $id             = $regs["marcasID"];
            $nombreMarca         = utf8_encode($regs["marcasNOM"]);                                 
            echo "<tr>\n";
            echo " <td style='text-align: right;'>$id</td>\n";             
            echo " <td>$nombreMarca</td>\n";           
            echo " <td  style='text-align: center;'>\n";
            echo "  <a href='Administrador/Marcas/ProcesoModificarMarcas.php?ID=$id'>\n";
            echo "    <img class='btn' src='Image/icoUPD2.jpg' />";
            echo "  </a>\n";
            echo " </td>\n";
            echo " <td style='text-align: center;'>\n";
            echo "  <a href=\"javascript:ConfirmaDELLST($id,'$orden','$tipoOrden');\">\n";
            echo "    <img class='btn' src='Image/icoDEL.jpg' />";
            echo "  </a>\n";            
            echo " </td>\n";                                                                        
            echo "</tr>\n";
        } // end while
        // cerrar conexión
        mysql_close($conex);
echo '
        </table>
        </fieldset>
      </div>
      </div>
      ';
?>
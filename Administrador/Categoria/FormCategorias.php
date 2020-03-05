<link rel="stylesheet" href="Estilos/styleCategoria.css" />
<?php

echo '
    <div class="boxRegistro">
    <h1>Ingreso de Categoria</h1>
        <form id="dataFRM_CATEGORIA" action="Administrador/Categoria/ProcesoIngresarCategoria.php" method="POST" class="formulario">
            <hr>
            <label id="icon" for="name"><i class="icon-user"></i></label>
            <input type="text" name="nameCategoria" id="idCategoria" placeholder="Ingrese nombre de la Categoria" required/>
            <hr>
            <a href="#" class="button" onclick="CheckCATEGORIA()">Guardar Categoria</a>
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
            $orden = "categoriasID";
        }  
        // determinar tipo de orden
        if (isset($_GET["TIPO"])) {
                // cargar tipo de orden especicado
            $tipoOrden =$_GET["TIPO"];
        } else {
                // establecer tipo de orden por defecto
                $tipoOrden = "ASC";
        }  


        $sql = "SELECT * FROM categorias ORDER BY $orden $tipoOrden";

        // ejecutar sentencia de control
        $result = mysql_query($sql,$conex);

        if (mysql_num_rows($result)==0) {
            // enviar mensaje de error
            header("Location: Error/errorPage.php?MSG=No existen datos para el mostrar / $orden  / $tipoOrden / $sql");
        } // endif
        // crear cabecera de grilla de datos
        echo "
         <tr>
           <th>
             <a href='index.php?ORD=categoriasID&TIPO=asc'>
               <img class='btn' src='Image/btnUp.png' />
             </a>  
             ID Categoria
             <a href='index.php?ORD=categoriasID&TIPO=desc'>
               <img class='btn' src='Image/btnDown.png' />
             </a>               
           </th>
           <th>
             <a href='index.php?ORD=categoriasNOM&TIPO=asc'>
               <img class='btn' src='Image/btnUp.png' />
             </a>  
             Categorias
             <a href='index.php?ORD=categoriasNOM&TIPO=desc'>
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
            $id             = $regs["categoriasID"];
            $nombreCategoria         = utf8_encode($regs["categoriasNOM"]);                                 
            echo "<tr>\n";
            echo " <td style='text-align: right;'>$id</td>\n";             
            echo " <td>$nombreCategoria</td>\n";           
            echo " <td  style='text-align: center;'>\n";
            echo "  <a href='Administrador/Categoria/ProcesoModificarCategoria.php?ID=$id'>\n";
            echo "    <img class='btn' src='Image/icoUPD2.jpg' />";
            echo "  </a>\n";
            echo " </td>\n";
            echo " <td style='text-align: center;'>\n";
            echo "  <a href=\"javascript:ConfirmaDELCAT($id,'$orden','$tipoOrden');\">\n";
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
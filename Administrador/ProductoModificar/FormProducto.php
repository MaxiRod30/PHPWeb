<link rel="stylesheet" href="Estilos/styleProductoMod.css" />



<div class="boxRegistro">
<h1>Buscar Producto</h1>
        <form id="dataFRM_FILTRO" action="Administrador/Producto/FiltrarProducto.php" method="POST" class="formulario">
            <hr>
            <label id="icon" for="name"><i class="icon-user"></i></label>
            <input type="text" name="nameBUSNombre" id="idBUSNombre" placeholder="Ingrese nombre del Producto" required/>
            
            <label id="icon" for="name"><i class="icon-user"></i></label>
            <select id="idCategoria" name="nameCategoria">
              <option value="0">-- Seleccione Categoria. --</option>
              <?php
                // crear opciones
                include "CargarComboCategorias.php";
              ?> 

            <label id="icon" for="name"><i class="icon-user"></i></label>
            <input type="text" name="namePrecioMin" id="idPrecioMin" placeholder="Ingrese Precio minimo" required/>
            
            <label id="icon" for="name"><i class="icon-user"></i></label>
            <select id="idMarca" name="nameMarca">
              <option value="0">-- Seleccione Marcas. --</option>
              <?php
                // crear opciones
                include "CargarComboMarcas.php";
              ?> 
            
            <label id="icon" for="name"><i class="icon-user"></i></label>
            <input type="text" name="namePrecioMax" id="idPrecioMax" placeholder="Ingrese Precio maximo" required/>

            <label id="icon" for="name"><i class="icon-user"></i></label>
            <select id="idOrigen" name="nameOrigen">
              <option value="">-- Seleccione Origen. --</option>
              <option value="China">China</option>
              <option value="UK">UK</option>
              <option value="USA">USA</option>         
            </select>
            
            <hr>
        </form>

    <h1>Lista de Producto</h1>
    <div id="contenido">
    <fieldset id="dsc">
     <legend>Listado</legend>
        <table id="lst">
<?php
        // conectar al servidor
        include "conexionBASE.php"; 

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
  echo "  
         <tr>
           <th>
              <a href='index.php?ORD=productoID&TIPO=asc'>
                <img class='btn' src='Image/btnUp.png' />
              </a>  
              ID
              <a href='index.php?ORD=productoID&TIPO=desc'>
                <img class='btn' src='Image/btnDown.png' />
              </a>               
           </th>
           <th>
              <a href='index.php?ORD=productoNOM&TIPO=asc'>
                <img class='btn' src='Image/btnUp.png' />
              </a>  
              Nombre
              <a href='index.php?ORD=productoNOM&TIPO=desc'>
                <img class='btn' src='Image/btnDown.png' />
              </a>               
           </th>
           <th>
              <a href='index.php?ORD=productoDESCRIP&TIPO=asc'>
                <img class='btn' src='Image/btnUp.png' />
              </a>  
              Descripcion
              <a href='index.php?ORD=productoDESCRI&TIPO=desc'>
                <img class='btn' src='Image/btnDown.png' />
              </a>               
          </th>
          <th>
              <a href='index.php?ORD=productoPRECIO&TIPO=asc'>
                <img class='btn' src='Image/btnUp.png' />
              </a>  
              Precio
              <a href='index.php?ORD=productoPRECIO&TIPO=desc'>
                <img class='btn' src='Image/btnDown.png' />
              </a>               
          </th>
          <th>
            <a href='index.php?ORD=productoMARCA&TIPO=asc'>
              <img class='btn' src='Image/btnUp.png' />
            </a>  
            Marca
            <a href='index.php?ORD=productoMARCA&TIPO=desc'>
              <img class='btn' src='Image/btnDown.png' />
            </a>               
          </th>
          <th>
            <a href='index.php?ORD=productoCATEG&TIPO=asc'>
              <img class='btn' src='Image/btnUp.png' />
            </a>  
            Categoria
            <a href='index.php?ORD=productoCATEG&TIPO=desc'>
              <img class='btn' src='Image/btnDown.png' />
            </a>               
          </th>
          <th>
            <a href='index.php?ORD=productoPAIS&TIPO=asc'>
              <img class='btn' src='Image/btnUp.png' />
            </a>  
            Origen
            <a href='index.php?ORD=productoPAIS&TIPO=desc'>
              <img class='btn' src='Image/btnDown.png' />
            </a>               
           </th>
           <th>
           <a href='index.php?ORD=productoACT&TIPO=asc'>
             <img class='btn' src='Image/btnUp.png' />
           </a>  
           Estado
           <a href='index.php?ORD=productoACT&TIPO=desc'>
             <img class='btn' src='Image/btnDown.png' />
           </a>               
          </th>
           <th>
              Foto           
           </th>
           <th>
             UPD
           </th>         
         </tr>
        "; 

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
        </table>
        </fieldset>
      </div>
      </div>
      

</div>

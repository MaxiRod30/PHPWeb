<?php
//Encabezado de la tabla
echo "
    <thead>
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
    </thead>
";
        // conectar al servidor
        include "../../conexionBASE.php"; 

    if (isset($_POST["FNOM"])) {
        $F_NOM = $_POST["FNOM"];
    } elseif (isset($_GET["FNOM"])) {
        $F_NOM = $_GET["FNOM"];
    } 

    if (isset($_POST["FCAT"])) {
        $F_CAT = $_POST["FCAT"];
    } elseif (isset($_GET["FCAT"])) {
        $F_CAT = $_GET["FCAT"];
    } 

    if (isset($_POST["FMAR"])) {
        $F_MAR = $_POST["FMAR"];
    } elseif (isset($_GET["FMAR"])) {
        $F_MAR = $_GET["FMAR"];
    } 

    if (isset($_POST["FORG"])) {
        $F_ORG = $_POST["FORG"];
    } elseif (isset($_GET["FORG"])) {
        $F_ORG = $_GET["FORG"];
    } 

    if (isset($_POST["FPMIN"])) {
        $F_PMIN = $_POST["FPMIN"];
    } elseif (isset($_GET["FPMIN"])) {
        $F_PMIN = $_GET["FPMIN"];
    } 

    if (isset($_POST["FPMAX"])) {
        $F_PMAX = $_POST["FPMAX"];
    } elseif (isset($_GET["FPMAX"])) {
        $F_PMAX = $_GET["FPMAX"];
    } 

    if (isset($_POST["FEST"])) {
        $F_EST = $_POST["FEST"];
    } elseif (isset($_GET["FEST"])) {
        $F_EST = $_GET["FEST"];
    } 
    if (isset($_POST["FID"])) {
        $F_FID = $_POST["FID"];
    } elseif (isset($_GET["FID"])) {
        $F_FID = $_GET["FID"];
    } 
    if ($F_NOM=="" && $F_CAT== 0 && $F_MAR== 0 && $F_ORG== "" && $F_PMIN == "" && $F_PMAX == "" && $F_EST == "" && $F_FID == ""){
        $filtro="";
    }else{

        $filtroWhere = "WHERE ";
        $f_AND = " AND ";
        //------NOMBRE------
        if ($F_NOM==""){
            $filtroNOM = "";
        }else {
            $filtroNOM = " (( productoNOM='$F_NOM') OR (productoNOM LIKE '$F_NOM%')) ";
        } 
        //------CATEGORIA------
        if ($F_CAT==0){
            $filtroCAT = "";
        }else {
            $filtroCAT = " productoCATEG='$F_CAT' ";
        } 
        //------MARCA------
        if ($F_MAR==0){
            $filtroMAR = "";
        }else {
            $filtroMAR = " productoMARCA='$F_MAR' ";
        } 
        //------ORIGEN------
        if ($F_ORG==""){
            $filtroORG = "";
        }else {
            $filtroORG = " productoPAIS='$F_ORG' ";
        } 
        //------PRECIO MINIMO Y MAXIMO------
        if ($F_PMIN=="" || $F_PMAX==""){
            $filtroPMIN = "";
        }else {
            $filtroPMIN = " (productoPRECIO between '$F_PMIN' AND '$F_PMAX') ";
        } 
        //------ESTADO------
        if ($F_EST==""){
            $filtroEST = "";
        }else {
            $filtroEST = " productoACT='$F_EST' ";
        } 
        //------ID------
        if ($F_FID==""){
            $filtroID = "";
        }else {
            $filtroID = " productoID='$F_FID' ";
        } 
        // PALABRA DE FILTRO
        $filtro = "$filtroWhere";
        $filtro.= "$filtroCAT";

        if ($filtroCAT!="")
            $filtro.= "$f_AND";

        $filtro.= "$filtroMAR";  

        if ($filtroMAR!="")
            $filtro.= "$f_AND";

        $filtro.= "$filtroORG"; 

        if ($filtroORG!="")
            $filtro.= "$f_AND"; 

        $filtro.=  "$filtroEST";

        if ($filtroEST!="")
            $filtro.= "$f_AND"; 

        $filtro.=  "$filtroPMIN"; 

        if ($filtroPMIN!="")
            $filtro.= "$f_AND";

        $filtro.=  "$filtroID"; 

        if ($filtroID!="")
            $filtro.= "$f_AND";

        $filtro.= "$filtroNOM";

        if ($filtroNOM == ""){
             $filtro.= " 1 ";
            }
        
    }
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
        $sql .= "$filtro ";
        $sql .= "ORDER BY $orden $tipoOrden";
         //die($sql);
        // ejecutar sentencia de control
        $result = mysql_query($sql,$conex);

        if (mysql_num_rows($result)==0) {
            // enviar mensaje de error
            echo "NO SE ENCONTRO DATOS";   
        } // endif
        // crear cabecera de grilla de datos
        else{
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
                echo "<tbody id='tablabody'>\n";
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
            }
            echo "</tbody>\n";
     } // end while
        // cerrar conexión
        mysql_close($conex);
?>
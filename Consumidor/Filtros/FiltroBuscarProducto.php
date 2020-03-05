<?php

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

    if (isset($_POST["FID"])) {
        $F_FID = $_POST["FID"];
    } elseif (isset($_GET["FID"])) {
        $F_FID = $_GET["FID"];
    } 
    if (isset($_GET["ORD"])) {
        // cargar orden especificado
        $orden = $_GET["ORD"];    
    } else {
        // establecer orden por defecto
        $orden = "productoID";
    }  
    // determinar tipo de orden
    if (isset($_GET["TIP"])) {
            // cargar tipo de orden especicado
        $tipoOrden =$_GET["TIP"];
    } else {
            // establecer tipo de orden por defecto
            $tipoOrden = "ASC";
    }  
    if ($F_NOM=="" && $F_CAT== 0 && $F_MAR== 0 && $F_ORG== "" && $F_PMIN == "" && $F_PMAX == "" && $F_FID == ""){
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

        $filtroEST = " productoACT='Activo' ";
        
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

        $sql  = "SELECT p.productoID,p.productoNOM,p.productoDESCRIP,p.productoPRECIO,m.marcasNOM,c.categoriasNOM,p.productoPAIS,p.productoIMG,p.productoACT ";
        $sql .= "FROM producto AS p ";
        $sql .= "JOIN marcas AS m ";
        $sql .= "JOIN categorias AS c ";
        $sql .= "ON p.productoMARCA = m.marcasID AND p.productoCATEG = c.categoriasID ";
        $sql .= "$filtro ";
        $sql .= "ORDER BY $orden $tipoOrden";
    // die($sql);
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
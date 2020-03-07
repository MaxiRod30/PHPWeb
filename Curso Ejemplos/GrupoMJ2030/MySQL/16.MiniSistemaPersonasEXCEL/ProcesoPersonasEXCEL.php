<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html" />
    <meta charset="utf-8" />
	<meta name="author" content="Curso Web 2.0 - BIOS" />

    <link rel="stylesheet" href="EstilosPersonas.css"/>
    <script type="text/javascript" src="FuncionesPersonas.js"></script>
</head>

<body>
<!-- SECCION CABECERA -->
<?php
    include "head.inc";
?>
<!-- SECCION MENU -->
<?php
    include "menu.inc";
?>
<!-- SECCION CONTENIDO -->
<div id="contenido">
  <fieldset id="dsc">
   <legend>Listado</legend>
   <table id="lst">
     <?php
        // conectar al Servidor de Base de Datos
        include "conexion.inc";
        // determinar filtro
        if (isset($_POST["DTO"])) {
            // cargar filtro desde forumulario
            $dpto = $_POST["DTO"];
        } else {
            // cargar filtro desde listado
            $dpto = $_GET["DTO"];
        } // endif
        // determinar filtro
        if ($dpto=="0") {
            $filtro = "";
        } else {
            // crear sentencia SQL para filtrar por Departamento
            $filtro = "WHERE dtoPERS='$dpto'";
        } // endif
        // determinar orden
        if (isset($_GET["ORD"])) {
            // cargar orden especificado
            $orden = $_GET["ORD"];    
        } else {
            // establecer orden por defecto
            $orden = "idPERS";
        } // endif
        // determinar tipo de orden
        if (isset($_GET["TIPO"])) {
            // cargar tipo de orden especicado
            $tipoOrden =$_GET["TIPO"];
        } else {
            // establecer tipo de orden por defecto
            $tipoOrden = "asc";
        } // endif
        // crear sentencia SQL para listar
        $sql  = "SELECT p.idPERS,p.nomPERS,p.dirPERS,p.telPERS,d.nomDTO ";
        $sql .= "FROM personas AS p ";
        $sql .= "JOIN departamentos AS d ";
        $sql .= "ON p.dtoPERS=d.idDTO ";
        $sql .= "$filtro ";
        $sql .= "ORDER BY $orden $tipoOrden";
        // depurar sentencia
        // die($sql);
        // ejecutar sentencia SQL
        $result = mysql_query($sql,$conex);
        //  controlar existencia
        if (mysql_num_rows($result)==0) {
            // enviar mensaje de error
            header("Location: errorPage.php?MSG=No existen datos para el filtro especificado");
        } // endif
        // crear cabecera de grilla de datos
        echo "
         <tr>
           <th>
             <a href='ProcesoPersonasVER.php?ORD=idPERS&DTO=$dpto&TIPO=asc'>
               <img class='btn' src='images/btnUp.png' />
             </a>  
             ID
             <a href='ProcesoPersonasVER.php?ORD=idPERS&DTO=$dpto&TIPO=desc'>
               <img class='btn' src='images/btnDown.png' />
             </a>               
           </th>
           <th>
             <a href='ProcesoPersonasVER.php?ORD=nomPERS&DTO=$dpto&TIPO=asc'>
               <img class='btn' src='images/btnUp.png' />
             </a>  
             NOMBRE
             <a href='ProcesoPersonasVER.php?ORD=nomPERS&DTO=$dpto&TIPO=desc'>
               <img class='btn' src='images/btnDown.png' />
             </a>               
           </th>
           <th>
             <a href='ProcesoPersonasVER.php?ORD=dirPERS&DTO=$dpto&TIPO=asc'>
               <img class='btn' src='images/btnUp.png' />
             </a>  
             DIRECCION
             <a href='ProcesoPersonasVER.php?ORD=dirPERS&DTO=$dpto&TIPO=desc'>
               <img class='btn' src='images/btnDown.png' />
             </a>               
           </th>
           <th>
             <a href='ProcesoPersonasVER.php?ORD=telPERS&DTO=$dpto&TIPO=asc'>
               <img class='btn' src='images/btnUp.png' />
             </a>  
             TELEFONO
             <a href='ProcesoPersonasVER.php?ORD=telPERS&DTO=$dpto&TIPO=desc'>
               <img class='btn' src='images/btnDown.png' />
             </a>               
           </th>
           <th>
             <a href='ProcesoPersonasVER.php?ORD=nomDTO&DTO=$dpto&TIPO=asc'>
               <img class='btn' src='images/btnUp.png' />
             </a>  
             DEPARTAMENTO
             <a href='ProcesoPersonasVER.php?ORD=nomDTO&DTO=$dpto&TIPO=desc'>
               <img class='btn' src='images/btnDown.png' />
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
         // Enviar cabeceras al navegador
         //header("Content-type: text/html; charset=utf-8");         
         header("Content-type: application/xls");
         header("Content-Disposition: attachment; filename=Datos.xls");        
        while ($regPERS = mysql_fetch_array($result)) {
            // convertir caracteres
            $id             = $regPERS["idPERS"];
            $nombre         = utf8_encode($regPERS["nomPERS"]);            
            $direccion      = utf8_encode($regPERS["dirPERS"]);
            $telefono       = $regPERS["telPERS"];
            $departamento   = utf8_encode($regPERS["nomDTO"]);                        
            echo "<tr>\n";
            echo " <td style='text-align: right;'>$id</td>\n";             
            echo " <td>$nombre</td>\n";
            echo " <td>$direccion</td>\n";
            echo " <td style='text-align: right;'>$telefono</td>\n";
            echo " <td>$departamento</td>\n";
            echo " <td  style='text-align: center;'>\n";
            echo "  <a href='ProcesoPersonasConfirmUPD.php?ID=$id'>\n";
            echo "    <img class='btn' src='images/icoUPD2.jpg' />";
            echo "  </a>\n";
            echo " </td>\n";
            echo " <td style='text-align: center;'>\n";
            echo "  <a href=\"javascript:ConfirmaDELLST($id,$dpto,'$orden','$tipoOrden');\">\n";
            echo "    <img class='btn' src='images/icoDEL.jpg' />";
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

</body>
</html>
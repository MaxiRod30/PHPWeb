<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html" />
    <meta charset="utf-8" />
	<meta name="author" content="Curso Web 2.0 - BIOS" />
	<title>MiniSistema Personas - PDF</title>
    <link rel="stylesheet" href="EstilosPersonas.css"/>
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
   <a href="ProcesoPersonasGenPDF.php">
     <img class="pdf" src="images/icoPDF.png"/>
   </a>
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
        if ($dpto=="") {
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
        $sql = "SELECT * FROM personas $filtro ORDER BY $orden $tipoOrden";
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
        $cabeceraGRID = "
         <tr>
           <th>ID</th>
           <th>NOMBRE</th>
           <th>DIRECCION</th>
           <th>TELEFONO</th>
           <th>DEPARTAMENTO</th>                                 
         </tr>
         ";
        // crear filas de la grilla
        $filaGRID = "";         
        while ($regPERS = mysql_fetch_array($result)) {
            // convertir caracteres
            $id             = $regPERS["idPERS"];
            $nombre         = utf8_encode($regPERS["nomPERS"]);            
            $direccion      = utf8_encode($regPERS["dirPERS"]);
            $telefono       = $regPERS["telPERS"];
            $departamento   = utf8_encode($regPERS["dtoPERS"]);
            $filaGRID .= "                     
                    echo <tr>
                    echo  <td style='text-align: right;'>$id</td>             
                    echo  <td>$nombre</td>
                    echo  <td>$direccion</td>
                    echo  <td style='text-align: right;'>$telefono</td>
                    echo  <td>$departamento</td>                                    
                    echo </tr>    
                    ";
        } // end while
        $pieGRID = "   </table>";
        // cerrar conexión
        mysql_close($conex);
        
        // crear grilla
        $grid = $cabeceraGRID.$filaGRID.$pieGRID;
        // importar la librería
        include "PDF/lib/MPDF57/mpdf.php";
        // crear objeto PDF
        $mpdf = new mPDF('c','A4');
        // escribir html en PDF    
        $mpdf->writeHTML("$grid");
        // generar PDF
        $mpdf->Output('GrillaDeDatos.pdf','I');        
     ?>
  </fieldset>
</div>

</body>
</html>
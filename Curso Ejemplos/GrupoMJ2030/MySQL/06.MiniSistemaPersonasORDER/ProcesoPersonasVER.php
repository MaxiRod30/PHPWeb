<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html" />
    <meta charset="utf-8" />
	<meta name="author" content="Curso Web 2.0 - BIOS" />
	<title>MiniSistema Personas - ORDER</title>
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
        // crear sentencia SQL para listar
        $sql = "SELECT * FROM personas $filtro ORDER BY $orden";
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
             <a href='ProcesoPersonasVER.php?ORD=idPERS&DTO=$dpto'>ID</a>
           </th>     
           <th>
             <a href='ProcesoPersonasVER.php?ORD=nomPERS&DTO=$dpto'>NOMBRE</a>
           </th>
           <th>
             <a href='ProcesoPersonasVER.php?ORD=dirPERS&DTO=$dpto'>DIRECCION</a>
           </th>
           <th>
             <a href='ProcesoPersonasVER.php?ORD=telPERS&DTO=$dpto'>TELEFONO</a>
           </th>
           <th>
             <a href='ProcesoPersonasVER.php?ORD=dtoPERS&DTO=$dpto'>DEPARTAMENTO</a>
           </th>              
         </tr>
         ";        
        while ($regPERS = mysql_fetch_array($result)) {
            // convertir caracteres
            $id             = $regPERS["idPERS"];
            $nombre         = utf8_encode($regPERS["nomPERS"]);            
            $direccion      = utf8_encode($regPERS["dirPERS"]);
            $telefono       = $regPERS["telPERS"];
            $departamento   = utf8_encode($regPERS["dtoPERS"]);                        
            echo "<tr>\n";
            echo " <td style='text-align: right;'>$id</td>\n";             
            echo " <td>$nombre</td>\n";
            echo " <td>$direccion</td>\n";
            echo " <td style='text-align: right;'>$telefono</td>\n";
            echo " <td>$departamento</td>\n";                                    
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
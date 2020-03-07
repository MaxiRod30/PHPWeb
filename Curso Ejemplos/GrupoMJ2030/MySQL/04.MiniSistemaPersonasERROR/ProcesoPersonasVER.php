<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html" />
    <meta charset="utf-8" />
	<meta name="author" content="Curso Web 2.0 - BIOS" />
	<title>MiniSistema Personas - ERROR</title>
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
     <tr>
       <th>ID</th>     
       <th>NOMBRE</th>
       <th>DIRECCION</th>
       <th>TELEFONO</th>
       <th>DEPARTAMENTO</th>                     
     </tr>
     <?php
        // conectar al Servidor de Base de Datos
        include "conexion.inc";
        // crar sentencia SQL para mostrar todos los registros
        $sql = "SELECT * FROM personas";
        // ejecutar sentencia SQL
        $result = mysql_query($sql,$conex);
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
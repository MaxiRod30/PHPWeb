<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html" />
    <meta charset="utf-8" />
	<meta name="author" content="Curso Web 2.0 - BIOS" />
	<title>MiniSistema Personas - ABM</title>
    <link rel="stylesheet" href="EstilosPersonas.css"/>
</head>

<body>
<!-- SECCION CABECERA -->
<div id="head">
  <h1>MiniSistema Personas - ABML</h1>
</div>
<!-- SECCION MENU -->
<div id="menu">
  <a href="index.html">Inicio</a>
  <a href="FormPersonasINS.html">Insertar</a>
  <a href="FormPersonasUPD.html">Actualizar</a>
  <a href="FormPersonasDEL.html">Eliminar</a>
  <a href="ProcesoPersonasVER.php">Visualizar</a>
  <a href="javascript:window.close();">Salir</a>
</div>
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
        $conex = mysql_connect("localhost","root","");
        // controlar conexión
        if (!$conex) {
            die("ATENCION!!!... NO se pudo CONECTAR al SERVIDOR de Base de Datos");
        } // endif
        // seleccionar Base de Datos
        $selDB = mysql_select_db("grupomj2030",$conex);
        // controlar selección
        if (!$selDB) {
            die("ATENCION!!!... NO se pudo SELECCIONAR la Base de Datos");
        } // endif
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
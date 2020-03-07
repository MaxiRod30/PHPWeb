<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html" />
    <meta charset="utf-8" />
	<meta name="author" content="Curso Web 2.0 - BIOS" />
	<title>MiniSistema Personas - FICHEROS</title>
    <link rel="stylesheet" href="EstilosPersonas.css"/>
</head>

<body>
<!-- SECCION CABECERA -->
<div id="head">
  <h1>MiniSistema Personas - FICHEROS</h1>
</div>
<!-- SECCION MENU -->
<div id="menu">
  <a href="index.html">Inicio</a>
  <a href="FormPersonasINS.html">Insertar</a>
  <a href="ProcesoPersonasVER.php">Visualizar</a>
  <a href="javascript:window.close();">Salir</a>
</div>
<!-- SECCION CONTENIDO -->
<div id="contenido">
  <fieldset id="dsc">
   <legend>Listado</legend>
   <table>
     <tr>
       <th>NOMBRE</th>
       <th>DIRECCION</th>
       <th>TELEFONO</th>
       <th>DEPARTAMENTO</th>                     
     </tr>
     <?php
        // abrir archivo para lectura
        $idArch = fopen("DatosPersonas.txt","r");
        while (!feof($idArch)) {
            $reg = fgets($idArch,1024);
            echo "<tr>\n";
            echo " <td>$reg</td>\n";
            echo "</tr>\n";
        } // end while
     ?>
   <!--
     <tr>
       <td>$nombre</td>
       <td>$direccion</td>
       <td>$telefono</td>
       <td>$departamento</td>                     
     </tr>
   -->     
   </table>
  </fieldset>
</div>

</body>
</html>
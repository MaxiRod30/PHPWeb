<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html" />
    <meta charset="utf-8" />
	<meta name="author" content="Curso Web 2.0 - BIOS" />
	<title>MiniSistema Personas - FICHEROS CSV</title>
    <link rel="stylesheet" href="EstilosPersonas.css"/>
</head>

<body>
<!-- SECCION CABECERA -->
<div id="head">
  <h1>MiniSistema Personas - FICHEROS CSV</h1>
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
   <table id="lst">
     <tr>
       <th>NOMBRE</th>
       <th>DIRECCION</th>
       <th>TELEFONO</th>
       <th>DEPARTAMENTO</th>                     
     </tr>
     <?php
        // crear delimitadores y separadores
        $sep = ",";
        $del = '"';
     
        // abrir archivo para lectura
        $idArch = fopen("DatosPersonas.csv","r");
        while (!feof($idArch)) {
            $reg = fgetcsv($idArch,1024,$sep,$del);
            echo "<tr>\n";
            echo " <td>$reg[0]</td>\n"; // nombre
            echo " <td>$reg[1]</td>\n"; // dirección
            echo " <td style='text-align: right;'>$reg[2]</td>\n"; // teléfono
            echo " <td>$reg[3]</td>\n"; // departamento                                    
            echo "</tr>\n";
        } // end while
        // cerrar archivo
        fclose($idArch);
     ?>
   </table>
  </fieldset>
</div>

</body>
</html>
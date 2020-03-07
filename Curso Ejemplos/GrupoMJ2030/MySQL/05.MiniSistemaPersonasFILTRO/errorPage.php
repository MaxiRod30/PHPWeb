<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html" />
    <meta charset="utf-8" />
	<meta name="author" content="Curso Web 2.0 - BIOS" />
	<title>MiniSistema Personas - FILTRO</title>
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
   <legend>A T E N C I O N ! ! !</legend>
   <?php
        // capturar mensaje de error    
        $mensaje = $_GET["MSG"];
        echo "<p class='txtERR'>E R R O R ! ! !</p>\n";
        echo "<p class='txtMSG'>$mensaje</p>\n";
   ?>
  </fieldset>
</div>

</body>
</html>
<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html" />
    <meta charset="utf-8" />
	<meta name="author" content="Curso Web 2.0 - BIOS" />
	<title>MiniSistema Personas - SESSION</title>
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
   <legend>Bienvenida</legend>
    <?php
        // acceder a la sesión
        session_start();
        $nombre = $_SESSION["nombreLogueado"];
        echo "<p>Bienvenid@ $nombre</p>\n";
    ?>
  </fieldset>
</div>

</body>
</html>
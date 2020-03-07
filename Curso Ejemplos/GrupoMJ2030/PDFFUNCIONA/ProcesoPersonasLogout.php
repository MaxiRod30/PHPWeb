<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html" />
    <meta charset="utf-8" />
	<meta name="author" content="Curso Web 2.0 - BIOS" />
	<title>MiniSistema Personas - COOKIES</title>
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
   <legend>Logout</legend>
    <?php
        // acceder a la sesión
        session_start();
        $nombre = $_SESSION["nombreLogueado"];
        echo "<p>Gracias $nombre por usar el sistema</p>\n";
        // destruir sesión
        session_destroy();
    ?>
  </fieldset>
</div>

</body>
</html>
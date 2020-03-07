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
   <legend>Descripción</legend>
    <p>
      Continuando con las ampliaciones al MiniSistema CRUD de Personas,
      en esta versión, el sistema realiza un control de errores usando
      un proceso que genera un documento HTML con el mensaje recibo por
      el sistema. De esta forma se mantiene el diseño estético del sistema.
      El mensaje de error será enviado por la URL, por lo que el proceso
      que genera el documento con el texto toma el dato por medio del método
      GET.
    </p>
  </fieldset>
</div>

</body>
</html>
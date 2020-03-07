<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html" />
    <meta charset="utf-8" />
	<meta name="author" content="Curso Web 2.0 - BIOS" />
	<title>MiniSistema Personas - RELACIONES</title>
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
     Esta versión intenta mostrar un truco que es posible realizar
     enviando cabeceras al navegador por medio de la función <b>
     header()</b> de PHP. Es necesario recordar que antes de esta 
     función no debe haber una salida al navegador, es decir, no 
     enviar echo ni siquiera con un espacio.
    </p>
  </fieldset>
</div>

</body>
</html>
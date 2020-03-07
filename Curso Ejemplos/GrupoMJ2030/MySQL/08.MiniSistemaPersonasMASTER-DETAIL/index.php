<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html" />
    <meta charset="utf-8" />
	<meta name="author" content="Curso Web 2.0 - BIOS" />
	<title>MiniSistema Personas - MASTER DETAIL</title>
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
     En esta versión del MiniSistema CRUD de Personas, se agregan
     dos columnas que muestran una imagen para actualizar y otra
     para eliminar el registro. Cada imagen deberá pasar el ID del
     registro (reprentado por la fila) al proceso de Confirmación 
     de actualizar, de forma que tal que automáticamente se cargue
     el formulario con los datos actuales permitiendo al usuario 
     cambiar cualquier dato. En el caso de la elminación, se puede
     realizar el mismo proceso o ir directamente a una función de
     javascript que solicite confirmación para eliminar, y ésta lo
     derive a un proceso especial de eliminación, el cual toma el 
     ID y realiza la eliminación directamente, sin pasar por el 
     formulario.
    </p>
  </fieldset>
</div>

</body>
</html>
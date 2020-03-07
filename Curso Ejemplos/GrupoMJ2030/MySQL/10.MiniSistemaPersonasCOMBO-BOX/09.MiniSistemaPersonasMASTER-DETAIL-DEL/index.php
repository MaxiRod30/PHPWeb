<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html" />
    <meta charset="utf-8" />
	<meta name="author" content="Curso Web 2.0 - BIOS" />
	<title>MiniSistema Personas - MASTER DETAIL-DEL</title>
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
     cambiar cualquier dato.<br />
     Particularmente en esta versión, al pulsar el ícono de eliminación
     desde el listado, se muestra una alerta con confirmación generada
     por una función de javascript, la cual enviará datos al un proceso
     especial que elimina el registro, y éste <b>reenvía</b> los parámetros
     necesarios para mantener la grilla de datos en el estado anterior. 
    </p>
  </fieldset>
</div>

</body>
</html>
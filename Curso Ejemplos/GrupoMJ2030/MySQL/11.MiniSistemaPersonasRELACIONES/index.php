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
     A partir de esta varsión del MiniSistema CRUD de Personas, el
     sistema usa internamente una relación entre las tablas. Esto
     permite, entre otras cosas, crear las listas desplegables o 
     combo box en forma dinámica, es decir, creando las opciones 
     desde los datos de la tabla Departamentos. Por tanto es necesario
     realizar cambios en varios formularios y en algún que otro proceso.
     Como la lista desplegable es utilizada en todos los formularios,
     creamos un proceso en un archivo <b>.inc</b> para reutilizar el 
     código, sin embargo uno de los formularios precisa además seleccionar
     una de las opciones, por lo que existirá otro archivo <b>.inc</b>
     que crea esta lista especial, usada en los procesos de confirmación
     del Update y Delete de registros.<br />
     También el formulario de filtro, usa el proceso de cargar los
     depertamentos y al enviar al proceso de visualización, éste último
     realiza la combinación (JOIN o INNER JOIN) de las tablas para
     presentar la grilla de datos correctamente. Además será necesario
     cambiar los valores en las columnas para que sean ordenadas correctamente.
    </p>
  </fieldset>
</div>

</body>
</html>
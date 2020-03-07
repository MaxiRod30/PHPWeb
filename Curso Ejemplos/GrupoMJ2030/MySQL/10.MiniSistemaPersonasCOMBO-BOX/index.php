<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html" />
    <meta charset="utf-8" />
	<meta name="author" content="Curso Web 2.0 - BIOS" />
	<title>MiniSistema Personas - COMBO BOX</title>
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
     A partir de esta varsión del MiniSistema CRUD de Personas, el usuario
     no tendrá que escribir el nombre del departamento cuando ingrese un
     nuevo registro, lo desee modificar o solicite un listado filtrado.
     En su lugar se presenta una <b>lista desplegable</b> también llamado
     <b>combo box</b>. Esta lista es otra forma de entrada disponible en 
     los formularios. Se trata de escribir los diferentes valores que se
     presentarán en la lista, es decir, las <i>opciones/option</i> de la
     misma. 
    </p>
  </fieldset>
</div>

</body>
</html>
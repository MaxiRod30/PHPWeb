<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html" />
    <meta charset="utf-8" />
	<meta name="author" content="Curso Web 2.0 - BIOS" />
	<title>MiniSistema Personas - ORDER</title>
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
     En esta nueva versión del MiniSistema CRUD de Personas, cuando
     el usuario selecciona la opción de visualizar se presenta un 
     formulario donde puede ingresar el nombre del departamento por
     el cual desea filtrar el listado. Si envía el formulario vacío,
     el proceso asume que no habrá filtro, por lo que mostrará todos
     los registros. Además, cada titular de las columnas funcionará
     como un vínculo al mismo proceso, pero pasando por la URL el 
     nombre de la columna que corresponda en la Base de Datos. De
     esta forma el proceso deberá capturar una variable con dicha 
     información, y la usará para genenerar nuevamente el listado 
     pero ordenado por dicha columna. Inicialmente se muestra ordenado
     por ID.
    </p>
  </fieldset>
</div>

</body>
</html>
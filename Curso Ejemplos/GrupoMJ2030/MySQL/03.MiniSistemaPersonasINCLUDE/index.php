<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html" />
    <meta charset="utf-8" />
	<meta name="author" content="Curso Web 2.0 - BIOS" />
	<title>MiniSistema Personas - INCLUDE</title>
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
      en esta oportunidad iniciamos con el uso de incluir código PHP
      desde un archivo separado. Esto funciona de forma similar a los
      archivos .CSS y .JS. Tradicionalmente este tipo de archivo 
      tiene la extensión <b>.inc</b>, haciendo referencia a que serán
      incluidos dentro de otro código, sin embargo no es obligatorio
      que tengan dicha extensión. También es de suponer que código que
      contienen es exclusivamente PHP, pero tampoco es completamente
      necesario, podrían tener, por ejemplo, código HTML y/o CSS.<br />
      Un ejemplo claro de su utilidad es el código de conexión a la
      Base de Datos, todos los procesos necesitan realizar esto, por lo
      que si se escribe en un archivo separado, es muy fácil adaptar
      el sistema con otra base de datos. Pero es <b>importante</b> no 
      colocar este archivo en la raíz del sitio, ya que se genera un
      gran problema de seguridad.
    </p>
  </fieldset>
</div>

</body>
</html>
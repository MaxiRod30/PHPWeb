<?php
    // control de sesión
    if  (!isset($_SESSION["nombreLogueado"])) {
        // enviar al login
        header("Location: FormPersonasLOG.php");
    } // endif
?>
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
   <legend>Descripción</legend>
    <p>
     A partir de esta varsión del MiniSistema CRUD de Personas, el
     sistema utiliza SESIONES para permitir controlar el uso del 
     mismo por medio de usuario y contraseña. Tecnicamente una sesión 
     es desde el inicio del navegador hasta el cierre del mismo.<br />
     Por tanto, el sistema permite registrarse y luego realizar un 
     Login, en cuyo caso si el usuario existe, se redirige a una página
     de bienvenida mostrando el nombre del usuario y habilitando el 
     uso de las distintas opciones del sistema. Caso contrario se emite
     un mensaje de error. 
    </p>
  </fieldset>
</div>

</body>
</html>
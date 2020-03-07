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
   <legend>Descripción</legend>
    <p>
     Continuando con las ampliaciones al MiniSistema CRUD de Personas,
     en esta versión implementamos <b>cookies</b> para controlar la
     duración de la sesión. Cada vez que el usuario es reconocido com
     tal en la Base de Datos, y se crea la sesión habilitando el loguin,
     también se creará una cookie en el cliente, almacenando la hora en 
     que ingresó. Una cookie no es más que un archivo de texto que puede
     almacenar datos simples del lado del cliente.<br />
     Por tanto el proceso de control de sesión deberá además verificar 
     si existe la cookie, tomar el valor y cotejar que no haya pasado 
     el tiempo establecido. En cuyo caso se destruye la sesión y se 
     envía un mensaje anunciando que debe volver a iniciarla.
    </p>
  </fieldset>
</div>

</body>
</html>
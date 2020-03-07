<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html" />
    <meta charset="utf-8"/>
	<meta name="author" content="Curso Web 2.0" />
	<title>FORMULARIOS - Proceso Form GET</title>
</head>

<body>
 <h1>FORMULARIOS - Proceso Form GET</h1>
 
 <?php
    // capturar datos del formulario
    $nombre         = $_GET["NOM"];
    $direccion      = $_GET["DIR"];
    $telefono       = $_GET["TEL"];
    $departamento   = $_GET["DTO"];
    // procesar datos
    echo "<span>Tu nombre es: $nombre</span><br />\n";
    echo "<span>Tu dirección es: $direccion</span><br />\n";
    echo "<span>Tu teléfono es: $telefono</span><br />\n";
    echo "<span>Tu departamento es: $departamento</span><br />\n";                        
 ?>


</body>
</html>
<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html" />
    <meta charset="utf-8"/>
	<meta name="author" content="Curso Web 2.0" />
	<title>FORMULARIOS - Proceso Validar Form CLIENTE 1 </title>
</head>

<body>
 <h1>FORMULARIOS - Proceso Validar Form CLIENTE 1</h1>
 
 <?php
    // capturar datos del formulario
    $nombre         = $_POST["NOM"];
    $direccion      = $_POST["DIR"];
    $telefono       = $_POST["TEL"];
    $departamento   = $_POST["DTO"];
    // procesar datos
    echo "<span>Tu nombre es: $nombre</span><br />\n";
    echo "<span>Tu dirección es: $direccion</span><br />\n";
    echo "<span>Tu teléfono es: $telefono</span><br />\n";
    echo "<span>Tu departamento es: $departamento</span><br />\n";        
                        
 ?>
 <a href="EjemploValidarFormCLIENTE.html">volver al formulario</a>

</body>
</html>
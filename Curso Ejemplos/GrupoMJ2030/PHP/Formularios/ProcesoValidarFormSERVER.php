<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html" />
    <meta charset="utf-8"/>
	<meta name="author" content="Curso Web 2.0" />
	<title>FORMULARIOS - Proceso Validar Form SERVER</title>
</head>

<body>
 <h1>FORMULARIOS - Proceso Validar Form SERVER</h1>
 
 <?php
    // capturar datos del formulario
    $nombre         = $_POST["NOM"];
    $direccion      = $_POST["DIR"];
    $telefono       = $_POST["TEL"];
    $departamento   = $_POST["DTO"];
    // validar datos
    if ($nombre=="") {
        echo "<span>ATENCION!!!.. Ingrese nombre</span>\n";
    } else if ($direccion=="") {
        echo "<span>ATENCION!!!.. Ingrese dirección</span>\n";
    } else if ($telefono=="" || $telefono=="+598") {
        echo "<span>ATENCION!!!.. Ingrese teléfono</span>\n";
    } else if ($departamento=="") {
        echo "<span>ATENCION!!!.. Ingrese departamento</span>\n";
    } else {
        // procesar datos
        echo "<span>Tu nombre es: $nombre</span><br />\n";
        echo "<span>Tu dirección es: $direccion</span><br />\n";
        echo "<span>Tu teléfono es: $telefono</span><br />\n";
        echo "<span>Tu departamento es: $departamento</span><br />\n";        
    } // endif              
                        
 ?>
 <a href="EjemploValidarFormSERVER.html">volver al formulario</a>

</body>
</html>
<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html" />
    <meta charset="utf-8" />
	<meta name="author" content="Curso WEB 2.0 - BIOS" />
	<title>Ejemplo UPLOAD - Proceso</title>
</head>

<body>
 <h1>Ejemplo UPLOAD - Proceso</h1>
 
 <?php
    // proceso upload
    $carpeta = "descargas/";
    // verificar subida de archivo
    if (is_uploaded_file($_FILES["ADJ"]["tmp_name"])) {
        $nombreTMP   = $_FILES["ADJ"]["tmp_name"];
        $nombreOrig  = $_FILES["ADJ"]["name"];
        // mostrar nombre del archivo
        echo "<span>Archivo Temporal: $nombreTMP</span><br />\n";
        echo "<span>Archivo Original: $nombreOrig</span><br />\n";
        // mover archivo
        $destino = $carpeta.$nombreOrig;
        move_uploaded_file($nombreTMP,$destino);
        echo "<span>destino: $destino</span><br />\n";
        echo "<img src='$destino' width='100' height='75' /><br />\n";
    } else {
        echo "<span>NO fue posible subir el archivo</span><br />\n";
    } // endif
 ?>


</body>
</html>
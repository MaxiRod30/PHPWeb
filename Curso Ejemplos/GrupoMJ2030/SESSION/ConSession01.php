<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html" />
    <meta charset="utf-8" />
	<meta name="author" content="Curso WEB 2.0" />
	<title>Ejemplo de SESSION</title>
</head>

<body>
 <h1>Ejemplo de SESSION</h1>
 
 <?php
    // crear sesion
    session_start();
    // declarar variables
    $_SESSION["a"] = 10;
    // mostrar variables
    echo "<span>El valor de \a es: $_SESSION[a]</span><br />\n";
 ?>
 <a href="ConSession02.php">siguiente</a>

</body>
</html>
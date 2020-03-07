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
    $_SESSION["c"] = 30;
    // mostrar variables
    echo "<span>El valor es: $_SESSION[a]</span><br />\n";    
    echo "<span>El valor es: $_SESSION[b]</span><br />\n";
    echo "<span>El valor es: $_SESSION[c]</span><br />\n";            
 ?>


</body>
</html>
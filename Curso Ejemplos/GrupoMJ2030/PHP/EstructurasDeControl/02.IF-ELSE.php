<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html" />
    <meta charset="utf-8" />
	<meta name="author" content="Curso WEB 2.0" />
	<title>Estructuras de Control - IF ELSE</title>
</head>

<body>
 <h1>Estructuras de Control - IF ELSE</h1>
 
 <p>
    02. - Emitir un mensaje si el valor de una variable es igual
          a 100 o no.
 </p>
 
 <?php
    // declarar variables
    $a=100;
    // mostrar valor
    echo "<span>Valor actual: $a</span><br />\n";
    // evaluar valor
    if ($a==100) {
        echo "<span>El valor es igual a 100</span><br />\n";
    } else {
        echo "<span>El valor NO es igual a 100</span><br />\n";
    } // endif
 ?>


</body>
</html>
<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html" />
    <meta charset="utf-8" />
	<meta name="author" content="Curso WEB 2.0" />
	<title>Estructuras de Control - IF con Operadores</title>
</head>

<body>
 <h1>Estructuras de Control - IF Operadores</h1>
 
 <p>
    04. - Emitir un mensaje indicando si el valor de una variable
          se encuentra dentro o fuera de los rangos válidos de
          100 a 300 y 500 a 800.
 </p>
 
 <?php
    // declarar variables
    $a=1650;
    // mostrar valor
    echo "<span>Valor actual: $a</span><br />\n";
    // evaluar valor
    if (($a>=100 && $a<=300) || ($a>=500 && $a<=800)) {
        echo "<span>El valor se encuentra DENTRO de los rangos</span><br />\n";
    } else {
        echo "<span>El valor se encuentra FUERA de los rangos</span><br />\n";
    } // endif

 ?>


</body>
</html>
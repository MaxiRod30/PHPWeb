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
    03. - Emitir un mensaje si el valor de una variable se 
          encuentra o no en el rango de 100 a 300.
 </p>
 
 <?php
    // declarar variables
    $a=35;
    // mostrar valor
    echo "<span>Valor actual: $a</span><br />\n";
    // evaluar valor
    if ($a>=100 && $a<=300) {
        echo "<span>El valor se encuentra DENTRO del rango</span><br />\n";
    } else {
        echo "<span>El valor se encuentra FUERA del rango</span><br />\n";
    } // endif

 ?>


</body>
</html>
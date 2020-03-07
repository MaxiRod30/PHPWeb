<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html" />
    <meta charset="utf-8" />
	<meta name="author" content="Curso WEB 2.0" />
	<title>Estructuras de Control - IF Anidados con Operadores</title>
</head>

<body>
 <h1>Estructuras de Control - IF Anidados con Operadores</h1>
 
 <p>
    05. - Emitir un mensaje indicando si el valor de una variable
          se encuentra dentro del primer o segundo rango válido de
          100 a 300 o 500 a 800. Caso contrario también enviar un
          mensaje adecuado.
 </p>
 
 <?php
    // declarar variables
    $a=616;
    // mostrar valor
    echo "<span>Valor actual: $a</span><br />\n";
    // evaluar valor
    if ($a>=100 && $a<=300) {
        echo "<span>El valor se encuentra DENTRO del PRIMER rango</span><br />\n";
    } else {
        if ($a>=500 && $a<=800) {
            echo "<span>El valor se encuentra DENTRO del SEGUNDO rango</span><br />\n";
        } else {
            echo "<span>El valor se encuentra FUERA de los rangos</span><br />\n";            
        } // endif    
    } // endif

 ?>


</body>
</html>
<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html" />
    <meta charset="utf-8" />
	<meta name="author" content="Curso WEB 2.0" />
	<title>Estructuras de Control - IF Anidados</title>
</head>

<body>
 <h1>Estructuras de Control - IF Anidados</h1>
 
 <p>
    06. - Emitir mensajes indicativos sobre la situación del valor
          de una variable, teniendo en cuenta los rangos de 100 a
          300 y 500 a 800. Es decir, enviar un mensaje indicando 
          si el valor se encuentra ANTES de los rangos, en el PRIMER
          rango, ENTRE los rangos (no válido), en el SEGUNDO rango
          o SUPERA los rangos.
 </p>
 
 <?php
    // declarar variables
    $a=1760;
    // mostrar valor
    echo "<span>Valor actual: $a</span><br />\n";
    // evaluar valor
    if ($a<100) {
        echo "<span>El valor se encuentra ANTES de los rangos</span><br />\n"; 
    } else {
        if ($a>=100 && $a<=300) {
            echo "<span>El valor se encuentra DENTRO del PRIMER rango</span><br />\n";
        } else {
            if ($a>300 && $a<500) {
                echo "<span>NO ES VALIDO. El valor se encuentra ENTRE los rangos</span><br />\n";
            } else {
                if ($a>=500 && $a<=800) {
                    echo "<span>El valor se encuentra DENTRO del SEGUNDO rango</span><br />\n";
                } else {
                    echo "<span>El valor SUPERA los rangos</span><br />\n";
                } // endif
            } // endif
        } // endif
    } // endif

 ?>


</body>
</html>
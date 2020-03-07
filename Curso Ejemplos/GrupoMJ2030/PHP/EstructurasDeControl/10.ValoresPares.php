<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html" />
    <meta charset="utf-8" />
	<meta name="author" content="Curso PHP" />
	<title>Estructuras de Control - WHILE</title>
</head>

<body>
 <h1>Estructuras de Control - WHILE</h1>
 
 <p>
    10. - Mostrar los números pares del 1 al 20
 </p>

 
 <?php
    // declarar variables
    $num = 1;
    while ($num<=20) {
        // calcular resto
        $resto=$num%2;
        // evaluar si num es par
        if ($resto==0) {
            // mostrar valor PAR
            echo "<span>$num</span><br />\n";            
        } // endif
        // incrementar valor
        $num++; 
    } // end while


 ?>


</body>
</html>
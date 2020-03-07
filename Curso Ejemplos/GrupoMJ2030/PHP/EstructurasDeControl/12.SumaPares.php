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
    12. - Mostrar los números pares del 1 al 20 y la suma de ellos.
 </p>

 
 <?php
    // declarar variables
    $num = 1;
    $suma= 0;
    while ($num<=20) {
        // calcular resto
        $resto = $num%2;
        // evaluar valor par
        if ($resto==0) {
            // mostrar valor PAR
            echo "<span>$num</span><br />\n";
            // sumar valor PAR
            $suma=$suma+$num;            
        } // endif
        // incrementar valor (siguiente número)
        $num++;
    } // end while
    // mostrar resultado
    echo "<span>la suma de pares es: $suma</span><br />\n";
 
     

 ?>


</body>
</html>
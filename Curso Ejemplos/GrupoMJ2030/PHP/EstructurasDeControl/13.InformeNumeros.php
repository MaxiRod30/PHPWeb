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
    13. - Mostrar números del 1 al 20 e informar:
          - Suma de Pares
          - Suma de Impares
          - Suma total
 </p>

 
 <?php
    // declarar variables
    $num = 1;
    $sumaPAR= 0;
    $sumaIMP= 0;
    $sumaTOT= 0;
    while ($num<=20) {
        // mostrar valor
        echo "<span>$num</span><br />\n";
        // calcular resto
        $resto = $num%2;
        // evaluar valor par/impar
        if ($resto==0) {
            // sumar pares
            $sumaPAR=$sumaPAR+$num;
        } else {
            // sumar impares
            $sumaIMP=$sumaIMP+$num;
        } // endif
        // siguiente número
        $num++;
    } // end while
    $sumaTOT=$sumaPAR+$sumaIMP;    
    // mostrar resultados
    echo "<span>la sumar de pares es: $sumaPAR</span><br />\n";
    echo "<span>la sumar de impares es: $sumaIMP</span><br />\n";
    echo "<span>la sumar TOTAL es: $sumaTOT</span><br />\n";        


 ?>


</body>
</html>
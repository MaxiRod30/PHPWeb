<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html" />
    <meta charset="utf-8"/>
	<meta name="author" content="Curso WEB 2.0 - BIOS" />
	<title>Estructuras de Memoria - ARRAYS</title>
</head>

<body>
 <h1>Estructuras de Memoria - ARRAYS</h1>
 
 <p>
    04. Mostrar los valores impares de un array de 10 posiciones 
        y la suma de ellos.
 </p>
 
 <?php
    // declarar array
    $nums = array(9,7,96,6,11,64,32,43,80,22,123,560,890);
    // posiciones(0,1,02,3,04,05,06,07,08,09)
    
    // recorrer array usando while
    echo "<h4>Recorrer array usando WHILE</h4>\n";
    $pos=0;
    $suma=0;
    while ($pos<=count($nums)-1) {
        // determinar valor IMPAR
        if ($nums[$pos]%2!=0) {
            // mostrar valor IMPAR del array
            echo "<span>$nums[$pos]</span><br />\n";
            // sumar valor IMPAR
            $suma=$suma+$nums[$pos];            
        }// endif
        // siguiente posición
        $pos++;    
    } // end while
    // mostrar resultado
    echo "<span>La suma es: $suma</span><br />\n";

    // recorrer array usando FOR
    echo "<h4>Recorrer array usando FOR</h4>\n";
    $suma=0;    
    for ($i=0;$i<=count($nums)-1;$i++) {
        // calcular resto
        $resto=$nums[$i]%2;
        // determinar valor IMPAR
        if ($resto!=0) {
            // mostrar valor IMPAR del array
            echo "<span>$nums[$i]</span><br />\n";
            // sumar valor IMPAR
            $suma=$suma+$nums[$i];                        
        } // endif
    } // end for (siguiente)
    // mostrar resultado
    echo "<span>La suma es: $suma</span><br />\n";
                
 ?>


</body>
</html>
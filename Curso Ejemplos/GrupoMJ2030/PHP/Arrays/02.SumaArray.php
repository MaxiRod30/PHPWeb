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
    02. Recorrer un array de 10 posiciones y mostrar la suma de 
    sus valores 
 </p>
 
 <?php
    // declarar array
    $nums = array(9,7,96,6,11,64,32,43,80,22);
    // posiciones(0,1,02,3,04,05,06,07,08,09)
    
    // recorrer array usando while
    echo "<h4>Recorrer array usando WHILE</h4>\n";
    $pos=0;
    $suma=0;
    while ($pos<=9) {
        // mostrar valor del array
        echo "<span>$nums[$pos]</span><br />\n";
        // sumar valor del array
        $suma=$suma+$nums[$pos];
        // siguiente posición
        $pos++;    
    } // end while
    // mostrar resultado
    echo "<span>La suma es: $suma</span><br />\n";
    
    
    // recorrer array usando FOR
    $suma=0;
    echo "<h4>Recorrer array usando FOR</h4>\n";    
    for ($i=0;$i<=9;$i++) {
        // mostrar valor del array
        echo "<span>$nums[$i]</span><br />\n";
        // sumar valor del array
        $suma=$suma+$nums[$i];                
    } // end for
    // mostrar resultado
    echo "<span>La suma es: $suma</span><br />\n";    

                
 ?>


</body>
</html>
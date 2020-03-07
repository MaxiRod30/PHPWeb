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
    03. Recorrer un array de 10 posiciones que comienza en el 
        índice 1, mostrando solamente los valores pares.
 </p>
 
 <?php
    // declarar array
    $nums = array(1=>9,7,96,6,11,64,32,43,80,22);
    // posiciones(   1,2,03,4,05,06,07,08,09,10)
    
    // recorrer array usando while
    echo "<h4>Recorrer array usando WHILE</h4>\n";
    $pos=1;
    while ($pos<=10) {
        // determinar valor PAR
        if ($nums[$pos]%2==0) {
            // mostrar valor PAR del array
            echo "<span>$nums[$pos]</span><br />\n";            
        }// endif
        // siguiente posición
        $pos++;            
    } // end while

    // recorrer array usando FOR
    echo "<h4>Recorrer array usando FOR</h4>\n";    
    for ($i=1;$i<=10;$i++) {
        // calcular resto
        $resto=$nums[$i]%2;
        // determinar valor PAR
        if ($resto==0) {
            // mostrar valor PAR del array
            echo "<span>$nums[$i]</span><br />\n";            
        } // endif
    } // end for (siguiente)

                
 ?>


</body>
</html>
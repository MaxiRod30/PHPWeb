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
    05. Buscar y presentar el mayor valor de un array de 10 
        posiciones.
 </p>
 
 <?php
     // declarar array
    $nums = array(9,7,96,6,11,64,32,43,80,22);
    // posiciones(0,1,02,3,04,05,06,07,08,09)
    $mayor=0;
    
    for ($pos=0;$pos<=count($nums)-1;$pos++) {
        // determinar mayor
        if ($nums[$pos]>$mayor) {
            // guardar mayor valor
            $mayor = $nums[$pos]; 
        } // endif
    } // end for // siguiente posición
    // mostrar resultado
    echo "<span>el mayor es: $mayor</span><br />\n";
    
    $lugar = 0;
    $mayor = 0;
    while ($lugar<=count($nums)-1) {
        // determinar mayor
        if ($nums[$lugar]>$mayor) {
            // guardar mayor valor
            $mayor = $nums[$lugar]; 
        } // endif
        // siguiente lugar
        $lugar++;        
    } // end while
    // mostrar resultado
    echo "<span>el mayor es: $mayor</span><br />\n";   
    

                
 ?>


</body>
</html>
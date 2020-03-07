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
    07. Recorrer un array de 10 posiciones e informar:
        - Mayor valor:
        - Menor valor:
        - Posición del mayor:
        - Posición del menor:
        - Suma de Pares:
        - Suma de Impares:
        - Suma Total:
 </p>
 
 <?php
     // declarar array
    $nums = array(9,7,96,6,11,64,32,43,80,22);
    // posiciones(0,1,02,3,04,05,06,07,08,09)
    $pos=0;
    $mayor= $nums[$pos];
    $posMAY=0;
    $menor = $nums[$pos];
    $posMEN=0;
    $sumaPAR=0;
    $sumaIMP=0;
    $sumaTOT=0;
    
    
    for ($pos=0;$pos<=count($nums)-1;$pos++) {
        // determinar mayor
        if ($nums[$pos]>$mayor) {
            // guardar mayor valor
            $mayor = $nums[$pos];
            // guardar posición
            $posMAY= $pos; 
        } else if ($nums[$pos]<$menor){
            // guardar menor valor
            $menor = $nums[$pos];
            // guardar posición
            $posMEN= $pos;            
        } // endif
        // determinar valor par / impar
        $resto = $nums[$pos]%2;
        if ($resto==0) {
            // sumar valor par
            $sumaPAR=$sumaPAR+$nums[$pos];
        } else {
            // sumar valor impar
            $sumaIMP=$sumaIMP+$nums[$pos];
        } // endif
    } // end for // siguiente posición
    // sumar total
    $sumaTOT=$sumaPAR+$sumaIMP;    
    // mostrar resultados
    echo "<span>el mayor es: $mayor</span><br />\n";
    echo "<span>su posición es: $posMAY</span><br />\n";
    echo "<span>el menor es: $menor</span><br />\n";
    echo "<span>su posición es: $posMEN</span><br />\n";
    echo "<span>la suma de pares es: $sumaPAR</span><br />\n";
    echo "<span>la suma de impares es: $sumaIMP</span><br />\n";
    echo "<span>la suma de total es: $sumaTOT</span><br />\n";                    
    
                
 ?>


</body>
</html>
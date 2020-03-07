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
    09. - Imprimir números del 1 al 10 e informar la suma de ellos.
 </p>

 
 <?php
    // declarar variables
    $num = 1;
    $suma= 0;
    while ($num<=10) {
        // mostrar valor
        echo "<span>$num</span><br />\n";
        // sumar valor
        $suma=$suma+$num;
        // incrementar valor
        $num++;
    } // end while
    // mostrar resultado
    echo "<span>la suma es: $suma</span><br />\n";

 ?>


</body>
</html>
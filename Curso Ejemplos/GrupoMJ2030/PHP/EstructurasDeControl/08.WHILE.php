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
    08. - Imprimir números del 1 al 10 inclusive
 </p>

 
 <?php
    // declarar variables
    $num = 1;
    while ($num<=10) {
        // mostrar valor
        echo "<span>$num</span><br />\n";
        // incrementar valor
        $num++;
    } // end while
    
     

 ?>


</body>
</html>
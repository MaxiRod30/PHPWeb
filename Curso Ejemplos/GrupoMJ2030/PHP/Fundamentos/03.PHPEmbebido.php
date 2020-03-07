<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html" />
    <meta charset="utf-8" />
	<meta name="author" content="Curso WEB 2.0" />
	<title>PHP Embebido en HTML</title>
</head>

<body>
  <h1>PHP Embebido en HTML</h1>
  
  <p>
    Este texto es generado por HTML
  </p>

  <?php
     // declarar variables
     $a=10;
     $b=20;
     $c=$a+$b;
     // mostrar datos
     echo "<span>La suma es: $c</span>\n";
  ?>
  

</body>
</html>
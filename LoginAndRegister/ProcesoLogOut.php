<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html" />
    <meta charset="utf-8" />
    <meta name="author" content="Proyecto Web 2.0" />
    <title>Proyecto Web 2.0</title>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet"> 
    <link rel="stylesheet" href="../Estilos/styleLogin.css" />
    <script type="text/javascript" src="LoginJS.js"></script>

</head>

<body onload= "LogOUT();" >
<div class="boxRegistro">

  <h1>SALIDA DEL SISTEMA</h1>

    <?php        

        session_start();

        $nombre = $_SESSION["nombreLogueado"];

        echo "<h2>  Gracias $nombre por usar el sistema</h2>\n";

        
        // destruir sesión
        session_destroy();

    ?> 

</div>

</body>
</html>


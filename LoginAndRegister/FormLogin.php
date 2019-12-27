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

<body>
<div class="boxRegistro">
  <h1>Ingreso</h1>
  <form id="dataFRM_LOG" action="ProcesoLog.php" method="POST">
    <hr>      
    <label id="icon" for="name"><i class="icon-user"></i></label>
    <input type="text" name="nameUSER" id="idUSER" placeholder="Ingrese nombre de usuario" required/>

    <label id="icon" for="name"><i class="icon-key"></i></label>
    <input type="password" name="namePASS" id="idPASS" placeholder="Ingrese contraseña" required/>

    <a href="#" class="button" onclick="CheckLOG();">Login</a>
  </form>

  <hr>
    <a href="FormRegister.php" class="button2">Registrarse</a>
</div>

</body>
</html>
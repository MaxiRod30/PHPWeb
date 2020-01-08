<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../Estilos/styleRegister.css" />

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">  

    <script type="text/javascript" src="CambiarClaveJS.js"></script>
</head>
<body>

<div class="boxRegistro">
  <h1>Cambiar Contraseña</h1>
  <form  id="dataFRM_CAMB" action="ProcesoCAMBclave.php" method="POST">
    <hr>
    <label id="icon" for="name"><i class="icon-info-sign"></i></label>
    <input type="password" name="namePASSant" id="idPASSant" placeholder="Ingrese contraseña anterior" required/>
      
    <label id="icon" for="name"><i class="icon-user"></i></label>
    <input type="password" name="namePASSnue" id="idPASSnue" placeholder="Ingrese contraseña nueva" required />

    <label id="icon" for="name"><i class="icon-shield"></i></label>
    <input type="password" name="namePASSrep" id="idPASSrep" placeholder="Repita contraseña nueva" required/>
    <hr>

    <a href="FormLogin.php" class="button2">Cancelar</a>
    <a href="#" class="button" onclick="showHint(this.value,'idTXT0');>Modificar Clave</a>
  </form>
</div>
</body>
</html>
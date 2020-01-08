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
    <input onkeyup="showHint(this.value,'idTXT0');" type="password" name="namePASSant" id="idPASSant" placeholder="Ingrese contraseña anterior" required/>
      
    <label id="icon" for="name"><i class="icon-user"></i></label>
    <input  onkeyup="stateVAR(this.value,'idTXT1','idPASSant','idPASSrep');" type="password" name="namePASSnue" id="idPASSnue" placeholder="Ingrese contraseña nueva" required />

    <label id="icon" for="name"><i class="icon-shield"></i></label>
    <input onkeyup="stateVAR(this.value,'idTXT2','idPASSant','idPASSnue');" type="password" name="namePASSrep" id="idPASSrep" placeholder="Repita contraseña nueva" required/>

    <br>
    <img id="idTXT0" class="Control" src="../Image/tick-rojo.jpg"> 
    <span>Ingrese contraseña anterior</span>
    <br>
    <img id="idTXT1" class="Control" src="../Image/tick-rojo.jpg"> 
    <span>Ingrese contraseña nueva</span>
    <br>
    <img id="idTXT2" class="Control" src="../Image/tick-rojo.jpg"> 
    <span>Repetir contraseña</span>
    <br>
    <hr>
    <a href="FormLogin.php" class="button2">Cancelar</a>
    <a href="#" class="button" onclick="CheckREG('idTXT0');">Modificar Clave</a>
  </form>
</div>
</body>
</html>
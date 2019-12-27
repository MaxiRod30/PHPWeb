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

    <script type="text/javascript" src="LoginJS.js"></script>
</head>
<body>

<div class="boxRegistro">
  <h1>Registro</h1>
  <form  id="dataFRM_REG" action="ProcesoREG.php" method="POST">
    <hr>
    <label id="icon" for="name"><i class="icon-info-sign"></i></label>
    <input onkeyup="stateVAR(this.value,'idTXT0');" type="text" name="nameNOM" id="idNOM" placeholder="Ingrese nombre" required/>
      
    <label id="icon" for="name"><i class="icon-user"></i></label>
    <input onkeyup="showHint(this.value,'idTXT1');" type="text" name="nameUSER" id="idUSER" placeholder="Ingrese nombre de usuario" required />

    <label id="icon" for="name"><i class="icon-shield"></i></label>
    <input onkeyup="stateVAR(this.value,'idTXT2');" type="password" name="namePASS" id="idPASS" placeholder="Ingrese contraseña" required/>

    <br>
    <img id="idTXT0" class="Control" src="../Image/tick-rojo.jpg"> 
    <span>Ingreso de Nombre</span>
    <br>
    <img id="idTXT1" class="Control" src="../Image/tick-rojo.jpg"> 
    <span>Ingreso de Usuario</span>
    <br>
    <img id="idTXT2" class="Control" src="../Image/tick-rojo.jpg"> 
    <span>Ingreso de Contraseña</span>
    <br>
    <hr>
    <a href="FormLogin.php" class="button2">Cancelar</a>
    <a href="#" class="button" onclick="CheckREG('idTXT1');">Registrarse</a>
  </form>
</div>
</body>
</html>
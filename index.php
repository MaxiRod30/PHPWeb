<?php include "CtrlSession.php"; ?>

<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="Estilos/styleIndex2.css">
<link rel="stylesheet" href="Estilos/styleIndex.css">
<link rel="stylesheet" href="Estilos/styleMarcas.css" />

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">  
<script type="text/javascript" src="indexjs.js"></script>

<body ondblclick="menu_close()">

<!-- Menu a la Izquierda (hidden by default) -->
<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="menu_usr_iz">
  <a href="javascript:void(0)" onclick="menu_close()"
  class="w3-bar-item w3-button">Close Menu</a>
  <a href="Consumidor/ListarTodo/index.php" onclick="menu_close()" class="w3-bar-item w3-button">Listar Articulos</a>
  <a href="#about" onclick="menu_close()" class="w3-bar-item w3-button">About</a>
  <?php
    $privilegio= $_SESSION["userPrivilegio"];
    if ($privilegio == "Administrador"){
      echo '<a href="Administrador/Marcas/MoverPantMarcas.php" onclick="menu_close()" class="w3-bar-item w3-button">Marcas</a>';
      echo '<a href="Administrador/Categoria/MoverPantCategorias.php" onclick="menu_close()" class="w3-bar-item w3-button">Categorias</a>';
    }
  ?>
</nav>

<!-- Menu a la derecha (hidden by default)  -->
<nav class=" w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-right" style="margin-left: 60%;display:none;z-index:2;width:40%;min-width:300px" id="menu_usr_dr">
  <a href="CambiarClave/CambiarClave.php" onclick="menu_close()" class="w3-bar-item w3-button">Cambiar Contraseña</a>
  <a href="LoginAndRegister/ProcesoLogOut.php" onclick="menu_close()" class="w3-bar-item w3-button">Cerrar Sesion</a>
  <a href="javascript:void(0)" onclick="menu_close()" class="w3-bar-item w3-button">Cerrar Menu</a>
</nav>

<!-- Top menu -->
<div class="w3-top">
  <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
    <div class="w3-button w3-padding-16 w3-left" onclick="menu_iz_open()">☰</div>

    <?php
      $nombre = $_SESSION["nombreLogueado"];
      echo "<div class='w3-button w3-padding-16 w3-right' onclick='menu_dr_open()'>$nombre</div>";
    ?>

    <div class="w3-center w3-padding-16">Mi pagina</div>
  </div>
</div>
  
<!-- !PAGE CONTENT! -->
<!--  -->
<div class="w3-main w3-content w3-padding" style="max-width:1000px;margin-top:100px">

  <!-- First Photo Grid-->
  <?php
    $PantallaActiva = $_SESSION["PantallaCentral"];
    
    switch ($PantallaActiva) {
      case 1:
        echo '<table class= "celdaColumna">';
          include "CargaProductoDatosBASE.php";
        echo "</table>";
      break;
      case 100:
        include "Administrador/Marcas/FormMarcas.php"; 
      break;
      case 101:
        include "Administrador/Categoria/FormCategorias.php"; 
      break;
      default:
        echo '<table class= "celdaColumna">';
          include "CargaProductoDatosBASE.php";
        echo "</table>";
      }

  ?>
</body>
</html>

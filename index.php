<?php include "CtrlSession.php"; ?>

<!DOCTYPE html>
<html>
<title>ShopCamWeb</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="Estilos/styleIndex2.css">
<link rel="stylesheet" href="Estilos/styleIndex.css">

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">  

<script type="text/javascript" src="indexjs.js"></script>

<body ondblclick="menu_close()" >

<!-- Menu a la Izquierda (hidden by default) -->
<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:25%;min-width:200px" id="menu_usr_iz">
  <a href="javascript:void(0)" onclick="menu_close()"
  class="w3-bar-item w3-button">Cerrar Menu</a>  
  <a href="Consumidor/inicio.php" onclick="menu_close()" class="w3-bar-item w3-button">Inicio</a>
  <a href="Consumidor/ListarTodo/index.php" onclick="menu_close()" class="w3-bar-item w3-button">Listar Articulos</a>
 <?php
     $PantallaActiva = $_SESSION["PantallaCentral"];
      if ($PantallaActiva==1){
  ?>
          <div class="icono" >Filtros</div>
          <div class="icono" >Nombre</div>
          <input onkeyup ="ActualizarProductoConsumidor('consumidorTable', 'idBUSNombre', 'idBUSCategoria', 'idBUSMarca', 'idBUSOrigen', 'idBUSPrecioMin', 'idBUSPrecioMax', 'idBUSID', 'productoID', 'asc');" class="txtInput" name="nameBUSNombre" id="idBUSNombre" placeholder="Ingrese nombre" required/>
        
          <div class="icono">ID</div>
          <input onkeyup ="ActualizarProductoConsumidor('consumidorTable', 'idBUSNombre', 'idBUSCategoria', 'idBUSMarca', 'idBUSOrigen', 'idBUSPrecioMin', 'idBUSPrecioMax', 'idBUSID', 'productoID', 'asc');" class="txtInput" name="nameBUSID" id="idBUSID" placeholder="Ingrese ID" required/>
          
          <div class="icono">Precio</div>
          <input onkeyup ="ActualizarProductoConsumidor('consumidorTable', 'idBUSNombre', 'idBUSCategoria', 'idBUSMarca', 'idBUSOrigen', 'idBUSPrecioMin', 'idBUSPrecioMax', 'idBUSID', 'productoID', 'asc');" class="txtInputPRECIO1" name="nameBUSPrecioMin" id="idBUSPrecioMin" placeholder="Minimo" required/>
          <input onkeyup ="ActualizarProductoConsumidor('consumidorTable', 'idBUSNombre', 'idBUSCategoria', 'idBUSMarca', 'idBUSOrigen', 'idBUSPrecioMin', 'idBUSPrecioMax', 'idBUSID', 'productoID', 'asc');" class="txtInputPRECIO2" name="nameBUSPrecioMax" id="idBUSPrecioMax" placeholder="Maximo" required/>

          <div class="icono">Marcas</div>
          <select class="txtInput" onchange ="ActualizarProductoConsumidor('consumidorTable', 'idBUSNombre', 'idBUSCategoria', 'idBUSMarca', 'idBUSOrigen', 'idBUSPrecioMin', 'idBUSPrecioMax', 'idBUSID', 'productoID', 'asc');" class="txtInput" id="idBUSMarca" name="nameBUSMarca">
              <option value="0">-- Seleccione Marcas. --</option>
  <?php
                // crear opciones
                include "CargarComboMarcas.php";
  ?> 
          </select>

          <div class="icono">Categoria</div>
          <select onchange ="ActualizarProductoConsumidor('consumidorTable', 'idBUSNombre', 'idBUSCategoria', 'idBUSMarca', 'idBUSOrigen', 'idBUSPrecioMin', 'idBUSPrecioMax', 'idBUSID', 'productoID', 'asc');"  class="txtInput" id="idBUSCategoria" name="nameBUSCategoria">
              <option value="0">-- Seleccione Categoria. --</option>
  <?php
                // crear opciones
                include "CargarComboCategorias.php";
  ?> 
          </select>

          <div class="icono">Origen</div>
          <select onchange ="ActualizarProductoConsumidor('consumidorTable', 'idBUSNombre', 'idBUSCategoria', 'idBUSMarca', 'idBUSOrigen', 'idBUSPrecioMin', 'idBUSPrecioMax', 'idBUSID', 'productoID', 'asc');" class="txtInput" id="idBUSOrigen" name="nameBUSOrigen">
              <option value="">-- Seleccione Origen. --</option>
              <option value="China">China</option>
              <option value="UK">UK</option>
              <option value="USA">USA</option>         
          </select>
  <?php
      }
  ?>
  <?php
    $privilegio= $_SESSION["userPrivilegio"];
    if ($privilegio == "Administrador"){
      echo '<a href="Administrador/Marcas/MoverPantMarcas.php" onclick="menu_close()" class="w3-bar-item w3-button">Marcas</a>';
      echo '<a href="Administrador/Categoria/MoverPantCategorias.php" onclick="menu_close()" class="w3-bar-item w3-button">Categorias</a>';
      echo '<a href="Administrador/Producto/MoverPantProducto.php" onclick="menu_close()" class="w3-bar-item w3-button">Producto</a>';
      echo '<a href="Administrador/ProductoModificar/MoverPantProducto.php" onclick="menu_close()" class="w3-bar-item w3-button">Producto Modificar</a>';
    }
  ?>
</nav>

<!-- Menu a la derecha (hidden by default)  -->
<nav class=" w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-right" style="margin-left: 80%;display:none;z-index:2;width:30%;min-width:200px" id="menu_usr_dr">
  <a href="javascript:void(0)" onclick="menu_close()" class="w3-bar-item w3-button">Cerrar Menu</a>  
  <a href="CambiarClave/CambiarClave.php" onclick="menu_close()" class="w3-bar-item w3-button">Cambiar Contraseña</a>
  <a href="LoginAndRegister/ProcesoLogOut.php" onclick="menu_close()" class="w3-bar-item w3-button">Cerrar Sesion</a>

</nav>

<!-- Top menu -->
<div class="w3-top">
  <div class="w3-white w3-xlarge" style="max-width:1400px;margin:auto">
    <div class="w3-button w3-padding-16 w3-left" onclick="menu_iz_open()">☰</div>

    <?php
      $nombre = $_SESSION["nombreLogueado"];
      echo "<div class='w3-button w3-padding-16 w3-right' onclick='menu_dr_open()'>$nombre</div>";
    ?>

    <div class="w3-center w3-padding-16">ShopCamWeb</div>
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
        echo '<table id="consumidorTable" class= "celdaColumna">';
          include "Consumidor/ListarTodo/CargaProductoDatosBASE.php";
        echo "</table>";
        echo"<Footer>";
  ?>
         <a href="#" onclick="imprimirproducto('consumidorTable', 'idBUSNombre', 'idBUSCategoria', 'idBUSMarca', 'idBUSOrigen', 'idBUSPrecioMin', 'idBUSPrecioMax', 'idBUSID', 'productoID', 'asc');" class="w3-bar-item w3-button">Imprimir en PDF</a>
  <?php      
        echo"</Footer>";

      break;
      case 20:

        include "Consumidor/inicio.php"; 
      
      break;

      case 100:
        include "Administrador/Marcas/FormMarcas.php"; 
      break;
      case 101:
        include "Administrador/Categoria/FormCategorias.php"; 
      break;
      case 102:
        include "Administrador/Producto/FormProducto.php"; 
      break;
      case 103:
        include "Administrador/ProductoModificar/FormProducto.php"; 
      break;

      default:
      echo '<table id="consumidorTable" class= "celdaColumna">';
      include "Consumidor/ListarTodo/CargaProductoDatosBASE.php";
      echo "</table>";
      echo"<Footer>";
      ?>
        <a href="#" onclick="imprimirproducto('consumidorTable', 'idBUSNombre', 'idBUSCategoria', 'idBUSMarca', 'idBUSOrigen', 'idBUSPrecioMin', 'idBUSPrecioMax', 'idBUSID', 'productoID', 'asc');" class="w3-bar-item w3-button">Imprimir en PDF</a>
      <?php      
        echo"</Footer>";
        
      }
      
  ?>

  
</body>

</html>

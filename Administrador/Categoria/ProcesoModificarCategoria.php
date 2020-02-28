
<?php
    // PROCESO CONFIRM UPD
    
    // controlar logueado
    include "../../CtrlSession.php";
    
    // conectar al Servdior de Base de Datos
    include "../../conexionBASE.php";
    // capturar ID del formulario o listado
    if (isset($_POST["ID"])) {
        // cargar desde el formulario
        $id = $_POST["ID"];    
    } else {
        // cargar desde el listado
        $id = $_GET["ID"];
    } // endif
    // crear sentencia SQL para buscar el ID
    $sql = "SELECT * FROM categorias WHERE categoriasID=$id";
    // ejecutar sentencia SQL
    $result = mysql_query($sql,$conex);
    // controlar existencia
    if (mysql_num_rows($result)==0) {
        // enviar mensaje de error
        header("Location: ../../Error/errorPage.php?MSG=ID de la Categoria INEXISTENTE");
    } // endif
    // cargar registro
    $regPERS = mysql_fetch_array($result);
    // convertir datos
    $id             = $regPERS["categoriasID"];
    $categoriaNOM         = utf8_encode($regPERS["categoriasNOM"]);
              
    // cerrar conexión
    mysql_close($conex);
?>





<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../Estilos/styleIndex2.css">
<link rel="stylesheet" href="../../Estilos/styleIndex.css">
<link rel="stylesheet" href="../../Estilos/styleCategoria2.css" />

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">  
<script type="text/javascript" src="../../indexjs.js"></script>

<body ondblclick="menu_close()">

<!-- Menu a la Izquierda (hidden by default) -->
<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="menu_usr_iz">
  <a href="javascript:void(0)" onclick="menu_close()"
  class="w3-bar-item w3-button">Close Menu</a>
  <a href="../../Consumidor/ListarTodo/index.php" onclick="menu_close()" class="w3-bar-item w3-button">Listar Articulos</a>
  <a href="#about" onclick="menu_close()" class="w3-bar-item w3-button">About</a>
  <?php
    $privilegio= $_SESSION["userPrivilegio"];
    if ($privilegio == "Administrador"){
      echo '<a href="../../Administrador/Categoria/MoverPantMarcas.php" onclick="menu_close()" class="w3-bar-item w3-button">Marcas</a>';
      echo '<a href="Administrador/Categoria/MoverPantCategorias.php" onclick="menu_close()" class="w3-bar-item w3-button">Categorias</a>';
    }
  ?>
</nav>

<!-- Menu a la derecha (hidden by default)  -->
<nav class=" w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-right" style="margin-left: 60%;display:none;z-index:2;width:40%;min-width:300px" id="menu_usr_dr">
  <a href="../../CambiarClave/CambiarClave.php" onclick="menu_close()" class="w3-bar-item w3-button">Cambiar Contraseña</a>
  <a href="../../LoginAndRegister/ProcesoLogOut.php" onclick="menu_close()" class="w3-bar-item w3-button">Cerrar Sesion</a>
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
<div class="w3-main w3-content w3-padding" style="max-width:1000px;margin-top:150px">


    <div class="boxRegistro">
    <h1>Modificar Categoria</h1>
        <form id="dataFRM_CATEGORIA_UP" action="ProcesoCategoriaUP.php" method="POST" class="formulario">
            <hr>
            <label id="icon" for="name"><i class="icon-user"></i></label>
            <input type="text" name="nameID" id="idCategoriaID" 

            <?php echo "value='$id'" ?> 

            placeholder="Ingrese ID" disabled/>
            
            <label id="icon" for="name"><i class="icon-user"></i></label>
            <input type="text" name="nameCategoria" id="idCategoriaNOM" 

            <?php echo "value='$categoriaNOM'" ?> 

            placeholder="Ingrese nombre de la Categoria" required />
            <hr>
            
            <a href="#" class="button" onclick="CheckCATEGORIA_UP()">Modificar</a>
            <a href="../../index.php" class="button2">Cancelar</a>

        </form>
    </div>    

</body>
</html>

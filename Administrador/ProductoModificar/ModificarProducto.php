
<?php
    // PROCESO CONFIRM UPD
    
    // controlar logueado
    include "../../CtrlSession.php";
    
    // conectar al Servdior de Base de Datos
    include "../../conexionBASE.php";
    // capturar ID del formulario o listado
    if (isset($_POST["ID"])) {
        // cargar desde el formulario
        $idProduc = $_POST["ID"];    
    } else {
        // cargar desde el listado
        $idProduc = $_GET["ID"];
    } // endif

    // crear sentencia SQL para buscar el ID
    $sql  = "SELECT * ";
    $sql .= "FROM producto";
    $sql .=  " WHERE productoID='$idProduc'";
    // die($sql);
    // ejecutar sentencia SQL
    $result = mysql_query($sql,$conex);
    // controlar existencia
    if (mysql_num_rows($result)==0) {
        // enviar mensaje de error
        header("Location: ../../Error/errorPage.php?MSG=ID de Persona INEXISTENTE");
    } // endif
    // cargar registro
    $regs = mysql_fetch_array($result);
    // convertir datos
    $idProducto             = $regs["productoID"];
    $nombreProducto        = utf8_encode($regs["productoNOM"]);    
    $descripcionProducto        = utf8_encode($regs["productoDESCRIP"]);    
    $precioProducto        = utf8_encode($regs["productoPRECIO"]); 
    $marcaProducto        = utf8_encode($regs["productoMARCA"]); 
    $categoriaProducto        = utf8_encode($regs["productoCATEG"]);    
    $paisProducto        = utf8_encode($regs["productoPAIS"]);  
    $fotoaux        = utf8_encode($regs["productoIMG"]);  
    $fotoProducto = "BIOS/Proyecto/".$fotoaux ;
    $estadoProducto        = utf8_encode($regs["productoACT"]);   
              
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
<link rel="stylesheet" href="../../Estilos/styleMarcas.css" />

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">  
<script type="text/javascript" src="../../indexjs.js"></script>

<body >

<!-- Menu a la Izquierda (hidden by default) -->
<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="menu_usr_iz">
  <a href="javascript:void(0)" onclick="menu_close()"
  class="w3-bar-item w3-button">Close Menu</a>
  <a href="../../Consumidor/ListarTodo/index.php" onclick="menu_close()" class="w3-bar-item w3-button">Listar Articulos</a>
  <a href="#about" onclick="menu_close()" class="w3-bar-item w3-button">About</a>
  <?php
    $privilegio= $_SESSION["userPrivilegio"];
    if ($privilegio == "Administrador"){
      echo '<a href="../../Administrador/Marcas/MoverPantMarcas.php" onclick="menu_close()" class="w3-bar-item w3-button">Marcas</a>';
      echo '<a href="../../Administrador/Categoria/MoverPantCategorias.php" onclick="menu_close()" class="w3-bar-item w3-button">Categorias</a>';
      echo '<a href="../../Administrador/Producto/MoverPantProducto.php" onclick="menu_close()" class="w3-bar-item w3-button">Producto</a>';
      echo '<a href="../../Administrador/ProductoModificar/MoverPantProducto.php" onclick="menu_close()" class="w3-bar-item w3-button">Producto Modificar</a>';
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
<div class="w3-main w3-content w3-padding" style="max-width:1000px;margin-top:100px">

<div class="boxRegistro">
    <h1>Modificar Producto</h1>
        <form id="dataFRM_PRODUCTOMOD" action="ModificarProductoUP.php"enctype="multipart/form-data" method="POST" class="formulario">
            <hr>
            <label id="icon" for="name"><i class="icon-user"></i></label>
            <input  <?php echo "value='$idProducto '" ?> 
            type="text" name="nameProductoID" id="idProductoID" placeholder="Ingrese nombre del Producto" required/>
            
            <label id="icon" for="name"><i class="icon-user"></i></label>
            <input <?php echo "value='$nombreProducto'" ?> 
            type="text" name="nameProductoNOM" id="idProductoNOM" placeholder="Ingrese nombre del Producto" required/>
            
            <label id="icon" for="name"><i class="icon-user"></i></label>
            <input <?php echo "value='$descripcionProducto'" ?> 
            type="text" name="nameProductoDESCR" id="idProductoDESCR" placeholder="Ingrese la descripcion del Producto" required/>
            
            <label id="icon" for="name"><i class="icon-user"></i></label>
            <input <?php echo "value='$precioProducto'" ?> 
            type="text" name="nameProductoPRECIO" id="idProductoPRECIO" placeholder="Ingrese Precio del Producto" required/>
            
            <label id="icon" for="name"><i class="icon-user"></i></label>
            <select id="idCategoria" name="nameCategoria">
              <option value="0">-- Seleccione Categoria. --</option>
              <?php
                // conectar al Servidor
                include "../../conexionBASE.php";
                // crear sentencia SQL
                $sql = "SELECT * FROM categorias ORDER BY categoriasNOM";
                // ejecutar sentencia SQL
                $result = mysql_query($sql,$conex);
                // confirmar existencia
                if (mysql_num_rows($result)==0) {
                    // enviar mensaje de error
                    header("Location: ../../Error/errorPage.php?MSG=Debe agregar Categorias");
                } else {
                    // generar lista
                    while ($regs = mysql_fetch_array($result)) {
                        $id1  = $regs["categoriasID"];
                        $categoriasNOM   = utf8_encode($regs["categoriasNOM"]);
                        echo "<option value='$id1'";
                        if($id1 == $categoriaProducto ) {echo " selected=true ";}
                        echo ">$categoriasNOM </option>\n";
                    } // end while
                    // cerrar conexión
                    echo "</select>";
                    mysql_close($conex);
            
                } // endif  
            
              ?>                          
            </select>

            <label id="icon" for="name"><i class="icon-user"></i></label>
            <select id="idMarca" name="nameMarca">
              <option value="0">-- Seleccione Marcas. --</option>
              
                <?php
                // conectar al Servidor
                include "../../conexionBASE.php";
                // crear sentencia SQL
                $sql = "SELECT * FROM marcas ORDER BY marcasNOM";
                // ejecutar sentencia SQL
                $result = mysql_query($sql,$conex);
                // confirmar existencia
                if (mysql_num_rows($result)==0) {
                    // enviar mensaje de error
                    header("Location: ../../Error/errorPage.php?MSG=Debe agregar Marcas");
                } else {
                    // generar lista
                    while ($regs = mysql_fetch_array($result)) {
                        $id2  = $regs["marcasID"];
                        $marcasNOM   = utf8_encode($regs["marcasNOM"]);
                        echo "<option value='$id2'";
                        if($id2 == $marcaProducto ) {echo " selected=true ";}
                        echo ">$marcasNOM </option>\n";
                    } // end while
                    // cerrar conexión
                    echo "</select>";
                    mysql_close($conex);
                } // endif  


                ?>                          
            </select>

            <label id="icon" for="name"><i class="icon-user"></i></label>
            <select id="idOrigen" name="nameOrigen">
              <option value="">-- Seleccione Origen. --</option>
              <option <?php  if($paisProducto  == "China" ) {echo " selected=true ";} ?>
              value="China">China</option>
              <option <?php if($paisProducto  == "UK" ) {echo " selected=true ";} ?>
              value="UK">UK</option>
              <option <?php if($paisProducto  == "USA" ) {echo " selected=true ";} ?> 
              value="USA">USA</option>         
            </select>
            
            <label id="icon" for="name"><i class="icon-user"></i></label>
            <select id="idEstado" name="nameEstado">
              <option value="">-- Seleccione --</option>
              <option <?php if($estadoProducto  == "Activo" ) {echo " selected=true ";} ?>
              value="Activo">Activo</option>
              <option <?php if($estadoProducto  == "De baja" ) {echo " selected=true ";}?>
              value="De baja">De Baja</option>     
            </select>

            <br/>
            <br/>
            <label >Foto del Producto:</label>
            <input  type="file" id="idfile" name="nameFotoProducto" />

            <hr>
            <a href="#" class="button" onclick="CheckPRODUCTOMOD()">Modificar</a>
        </form>

</div>



</body>
</html>

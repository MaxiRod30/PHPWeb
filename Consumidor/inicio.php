<?php

$cookie_name = "CK_login";
$session_name = "nombreLogueado";

// CONTROL DE SESSION
session_start();

if (!isset($_SESSION[$session_name])) {
    // mensaje de error()
    header("Location: ../LoginAndRegister/FormLogin.php");
} else {
    // chequear cookie

    if (isset($_COOKIE[$cookie_name])) {
        // resetear Tiempo de la cookie 
        setcookie($cookie_name,"usrOK",time()+1800);
    } else {
        // enviar mensaje
        // session_destroy();
        header("Location: ../LoginAndRegister/FormLogin.php");
    } // endif
} //  endif
?>

<!DOCTYPE html>
<html>
<title>ShopCamWeb</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../Estilos/styleIndex2.css">
<link rel="stylesheet" href="../Estilos/styleIndex.css">
<style>
    body {
        font-family: Arial;
        margin: 0;
    }
    
    * {
        box-sizing: border-box;
    }
    
    img {
        vertical-align: middle;
    }
    /* Position the image container (needed to position the left and right arrows) */
    
    .container {
        width: 100%;
        height: 40%;
        position: relative;
        margin-left: 0%;
    }
    /* Hide the images by default */
    
    .mySlides {
        display: none;
    }
    /* Add a pointer when hovering over the thumbnail images */
    
    .cursor {
        cursor: pointer;
    }
    /* Next & previous buttons */
    
    .prev,
    .next {
        cursor: pointer;
        position: absolute;
        top: 40%;
        width: auto;
        padding: 16px;
        margin-top: -50px;
        color: white;
        font-weight: bold;
        font-size: 20px;
        border-radius: 0 3px 3px 0;
        user-select: none;
        -webkit-user-select: none;
    }
    /* Position the "next button" to the right */
    
    .next {
        right: 0;
        border-radius: 3px 0 0 3px;
    }
    /* On hover, add a black background color with a little bit see-through */
    
    .prev:hover,
    .next:hover {
        background-color: rgba(0, 0, 0, 0.8);
    }
    /* Number text (1/3 etc) */
    
    .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
    }
    /* Container for image text */
    
    .caption-container {
        text-align: center;
        background-color: #222;
        padding: 2px 16px;
        color: white;
    }
    
    .row:after {
        content: "";
        display: table;
        clear: both;
    }
    /* Six columns side by side */
    
    .column {
        float: left;
        width: 16.66%;
    }
    /* Add a transparency effect for thumnbail images */
    
    .demo {
        opacity: 0.6;
    }
    
    .active,
    .demo:hover {
        opacity: 1;
    }
</style>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">  
<script type="text/javascript" src="../indexjs.js"></script>

<body >

<!-- Menu a la Izquierda (hidden by default) -->
<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:25%;min-width:200px" id="menu_usr_iz">
  <a href="javascript:void(0)" onclick="menu_close()"
  class="w3-bar-item w3-button">Cerrar Menu</a>  
  <a href="../Consumidor/inicio.php" onclick="menu_close()" class="w3-bar-item w3-button">Inicio</a>
  <a href="../Consumidor/ListarTodo/index.php" onclick="menu_close()" class="w3-bar-item w3-button">Listar Articulos</a>

  <?php
    $privilegio= $_SESSION["userPrivilegio"];
    if ($privilegio == "Administrador"){
      echo '<a href="../Administrador/Marcas/MoverPantMarcas.php" onclick="menu_close()" class="w3-bar-item w3-button">Marcas</a>';
      echo '<a href="../Administrador/Categoria/MoverPantCategorias.php" onclick="menu_close()" class="w3-bar-item w3-button">Categorias</a>';
      echo '<a href="../Administrador/Producto/MoverPantProducto.php" onclick="menu_close()" class="w3-bar-item w3-button">Producto</a>';
      echo '<a href="../Administrador/ProductoModificar/MoverPantProducto.php" onclick="menu_close()" class="w3-bar-item w3-button">Producto Modificar</a>';
    }
  ?>
</nav>

<!-- Menu a la derecha (hidden by default)  -->
<nav class=" w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-right" style="margin-left: 80%;display:none;z-index:2;width:30%;min-width:200px" id="menu_usr_dr">
  <a href="javascript:void(0)" onclick="menu_close()" class="w3-bar-item w3-button">Cerrar Menu</a>  
  <a href="../CambiarClave/CambiarClave.php" onclick="menu_close()" class="w3-bar-item w3-button">Cambiar Contraseña</a>
  <a href="../LoginAndRegister/ProcesoLogOut.php" onclick="menu_close()" class="w3-bar-item w3-button">Cerrar Sesion</a>

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
<div class="w3-main w3-content w3-padding" style="max-width:2000px;margin-top:50px">



    <div class="container">
        <div class="mySlides">
            <div class="numbertext">1 / 6</div>
            <img src="../Image/Fotos panoramicas/Foto1.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">2 / 6</div>
            <img src="../Image/Fotos panoramicas/Foto2.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">3 / 6</div>
            <img src="../Image/Fotos panoramicas/Foto3.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">4 / 6</div>
            <img src="../Image/Fotos panoramicas/Foto4.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">5 / 6</div>
            <img src="../Image/Fotos panoramicas/Foto5.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">6 / 6</div>
            <img src="../Image/Fotos panoramicas/Foto6.jpg" style="width:100%">
        </div>

        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>

        <div class="caption-container">
            <p id="caption"></p>
        </div>

        <div class="row">
            <div class="column">
                <img class="demo cursor" src="../Image/Fotos panoramicas/Foto1.jpg" style="width:100%" onclick="currentSlide(1)" alt="Vista">
            </div>
            <div class="column">
                <img class="demo cursor" src="../Image/Fotos panoramicas/Foto2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Vista">
            </div>
            <div class="column">
                <img class="demo cursor" src="../Image/Fotos panoramicas/Foto3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Vista">
            </div>
            <div class="column">
                <img class="demo cursor" src="../Image/Fotos panoramicas/Foto4.jpg" style="width:100%" onclick="currentSlide(4)" alt="Vista">
            </div>
            <div class="column">
                <img class="demo cursor" src="../Image/Fotos panoramicas/Foto5.jpg" style="width:100%" onclick="currentSlide(5)" alt="Vista">
            </div>
            <div class="column">
                <img class="demo cursor" src="../Image/Fotos panoramicas/Foto6.jpg" style="width:100%" onclick="currentSlide(6)" alt="Vista">
            </div>
        </div>
    </div>

    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            var captionText = document.getElementById("caption");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            captionText.innerHTML = dots[slideIndex - 1].alt;
        }
    </script>

  
</body>

</html>

<?php
// hacer consession para meter una variable que inbremente
    session_start();
    // guardar en sesión el nombre del usuario
    $_SESSION["varIMG"] = $_SESSION["varIMG"] + 1;

    // proceso upload
    $carpeta = "../../imageProducto/";
    // verificar subida de archivo
    if (is_uploaded_file($_FILES["nameFotoProducto"]["tmp_name"])) {
        $nombreTMP   = $_FILES["nameFotoProducto"]["tmp_name"];
        $nombreOrig  = $_FILES["nameFotoProducto"]["name"];
        $destino = $carpeta.$_SESSION["varIMG"];
        move_uploaded_file($nombreTMP,$destino);
    } else {
        header("Location: ../../Error/errorPage.php?MSG=Error al subir la foto");
    } // endif
    // conectar al servidor
    include "../../conexionBASE.php";

   // capturar y convertir datos del formulario
   $nombreProducto    = utf8_decode($_POST["nameProductoNOM"]);
   $descripcionProducto    = utf8_decode($_POST["nameProductoDESCR"]);
   $precioProducto    = utf8_decode($_POST["nameProductoPRECIO"]);
   $categoriaProducto    = utf8_decode($_POST["nameCategoria"]);
   $marcaProducto    = utf8_decode($_POST["nameMarca"]);
   $origenProducto    = utf8_decode($_POST["nameOrigen"]);
   $estadoProducto    = utf8_decode($_POST["nameEstado"]);
   $fotoProducto = $destino;
  
   // controlar exitencia
   $sql = "SELECT * FROM producto WHERE productoNOM='$nombreProducto'";
   // ejecutar sentencia de control
   $result = mysql_query($sql,$conex);
   // determinar exitencia
   if (mysql_num_rows($result)==0) {
       // crear sentencia SQL para insertar
       $sql  = "INSERT INTO producto ";
       $sql .= "(productoID,productoNOM,productoDESCRIP,productoPRECIO,productoMARCA,productoCATEG,productoPAIS,productoIMG,productoACT) ";
       $sql .= "VALUES ";
       $sql .= "(null, '$nombreProducto ','$descripcionProducto','$precioProducto','$marcaProducto','$categoriaProducto','$origenProducto','$fotoProducto', '$estadoProducto')";
       // ejecutar sentencia SQL
       mysql_query($sql,$conex);
       // cerrar conexión
       mysql_close($conex);
       // volver automáticamente al formulario (redirigir)
       header("location: ../../DatosOK/CambioContraOK.php?MSG=Se agrego producto correctamente");     
   } else {
       // cerrar conexión
       mysql_close($conex);        
       // enviar mensaje de error
       header("location: ../../Error/errorPage.php?MSG=El producto ya exite");        
   } // endif
 ?>

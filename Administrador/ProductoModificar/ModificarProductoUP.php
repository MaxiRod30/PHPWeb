<?php
    // PROCESO PERSONAS UPD
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
        $destino="";
    } // endif
    // controlar logueado
    include "../../CtrlSession.php";
    
    // conectar al Servidor de Base de Datos
    include "../../conexionBASE.php";
    // cargar y convertir datos del formulario
    $IDProducto    = utf8_decode($_POST["nameProductoID"]);
    $nombreProducto    = utf8_decode($_POST["nameProductoNOM"]);
    $descripcionProducto    = utf8_decode($_POST["nameProductoDESCR"]);
    $precioProducto    = utf8_decode($_POST["nameProductoPRECIO"]);
    $categoriaProducto    = utf8_decode($_POST["nameCategoria"]);
    $marcaProducto    = utf8_decode($_POST["nameMarca"]);
    $origenProducto    = utf8_decode($_POST["nameOrigen"]);
    $estadoProducto    = utf8_decode($_POST["nameEstado"]);
    $fotoProducto = $destino;

    $sql  = "UPDATE producto SET ";
    $sql .= "productoNOM='$nombreProducto', ";
    $sql .= "productoDESCRIP='$descripcionProducto', ";
    $sql .= "productoPRECIO='$precioProducto', ";
    $sql .= "productoCATEG='$categoriaProducto', ";
    $sql .= "productoMARCA='$marcaProducto', ";
    $sql .= "productoPAIS='$origenProducto', ";
    $sql .= "productoACT='$estadoProducto' ";
    if($destino!="")    $sql .= " , productoIMG='$fotoProducto' ";
    $sql .= "WHERE productoID='$IDProducto'";
    // depurar instrucción SQL
    // depurar instrucción SQL
    // die($sql);
    // ejecutar sentencia SQL
    mysql_query($sql,$conex);
    // cerrar conexión
    mysql_close($conex);
    // volver al formulario de actualización
    header("location: ../../DatosOK/CambioContraOK.php?MSG=Se Modifico el producto correctamente");                           
?>
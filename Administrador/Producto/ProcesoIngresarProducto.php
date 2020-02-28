<?php
    // proceso upload
    $carpeta = "../../imageProducto/";
    // verificar subida de archivo
    if (is_uploaded_file($_FILES["nameFotoProducto"]["tmp_name"])) {
        $nombreTMP   = $_FILES["nameFotoProducto"]["tmp_name"];
        $nombreOrig  = $_FILES["nameFotoProducto"]["name"];
        $destino = $carpeta.$nombreOrig;
        move_uploaded_file($nombreTMP,$destino);

    } else {
        header("Location: ../../Error/errorPage.php?MSG=Error al subir la foto");
    } // endif



 ?>

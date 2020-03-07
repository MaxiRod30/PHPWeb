<?php
    // PROCESO PERSONAS INS - FICHEROS
    
    // abrir archivo
    $idArch = fopen("DatosPersonas.txt","a");
    // capturar datos del formulario
    $nombre         = $_POST["NOM"];
    $direccion      = $_POST["DIR"];
    $telefono       = $_POST["TEL"];
    $departamento   = $_POST["DTO"];
    // crear registro
    $regPERS = $nombre.$direccion.$telefono.$departamento."\r\n";
    // die($regPERS);
    // grabar registro
    fwrite($idArch,$regPERS);
    // cerrar archivo
    fclose($idArch);
    // volver automáticamente al formulario (redirigir)
    header("location: FormPersonasINS.html");
                

?>
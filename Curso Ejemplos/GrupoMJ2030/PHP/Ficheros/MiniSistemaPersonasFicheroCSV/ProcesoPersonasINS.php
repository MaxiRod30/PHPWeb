<?php
    // PROCESO PERSONAS INS - FICHEROS
    
    // crear delimitadores y separadores
    $sep = ",";
    $del = '"';
    $eol = "\r\n";
    
    // abrir archivo
    $idArch = fopen("DatosPersonas.csv","a");
    // capturar datos del formulario
    $nombre         = $del.$_POST["NOM"].$del.$sep;
    $direccion      = $del.$_POST["DIR"].$del.$sep;
    $telefono       = $del.$_POST["TEL"].$del.$sep;
    $departamento   = $del.$_POST["DTO"].$del.$eol;
    // crear registro
    $regPERS = $nombre.$direccion.$telefono.$departamento;
    // die($regPERS);
    // grabar registro
    fwrite($idArch,$regPERS);
    // cerrar archivo
    fclose($idArch);
    // volver automáticamente al formulario (redirigir)
    header("location: FormPersonasINS.html");
                

?>
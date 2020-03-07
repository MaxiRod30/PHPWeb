<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html" />
    <meta charset="utf-8" />
	<meta name="author" content="Curso WEB 2.0" />
	<title>Estructuras de Control - SWITCH-CASE</title>
</head>

<body>
 <h1>Estructuras de Control - SWITCH-CASE</h1>
 
 <p>
    07. - Emitir mensajes según el siguiente criterio:

      - INS: Seleccionó INSERTAR
      - DEL: Seleccionó ELIMINAR
      - UPD: Seleccionó ACTUALIZAR
      - LST: Seleccionó LISTAR
      - END: Seleccionó FINALIZAR
 </p>
 
 <?php
    // declarar variables
    $op = "LsT";
    // mostrar valor
    echo "<span>Valor actual: $op</span><br />\n";
    // convertir valor
    $op=strtoupper($op);
    // evaluar valor
    if ($op=="INS") {
        echo "<span>Seleccionó INSERTAR</span><br />\n";
    } else if ($op=="UPD") {
        echo "<span>Seleccionó ACTUALIZAR</span><br />\n";
    } else if ($op=="LST") {
        echo "<span>Seleccionó LISTAR</span><br />\n";
    } else if ($op=="DEL") {
        echo "<span>Seleccionó ELIMINAR</span><br />\n";
    } else if ($op=="END") {
        echo "<span>Seleccionó FINALIZAR</span><br />\n";
    } else {
        echo "<span>Seleccionó OPCION INCORRECTA</span><br />\n";
    } // endif
    
    switch ($op) {
        case "INS":
            echo "<span>Seleccionó INSERTAR</span><br />\n";
            break;
        case "DEL":
            echo "<span>Seleccionó ELIMINAR</span><br />\n";
            break;                        
        case "LST":
            echo "<span>Seleccionó LISTAR</span><br />\n";
            break;                        
        case "UPD":
            echo "<span>Seleccionó ACTUALIZAR</span><br />\n";
            break;                        
        case "END":
            echo "<span>Seleccionó FINALIZAR</span><br />\n";
            break;                        
        default:
            echo "<span>Seleccionó OPCION INCORRECTA</span><br />\n";                                                                    
    } // end switch            
 ?>


</body>
</html>
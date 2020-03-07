<?php
    // PROCESO CONFIRM UPD
    
    // conectar al Servdior de Base de Datos
    include "conexion.inc";
    // capturar ID del formulario o listado
    if (isset($_POST["ID"])) {
        // cargar desde el formulario
        $id = $_POST["ID"];    
    } else {
        // cargar desde el listado
        $id = $_GET["ID"];
    } // endif
    // crear sentencia SQL para buscar el ID
    $sql = "SELECT * FROM personas WHERE idPERS=$id";
    // ejecutar sentencia SQL
    $result = mysql_query($sql,$conex);
    // controlar existencia
    if (mysql_num_rows($result)==0) {
        // enviar mensaje de error
        header("Location: errorPage.php?MSG=ID de Persona INEXISTENTE");
    } // endif
    // cargar registro
    $regPERS = mysql_fetch_array($result);
    // convertir datos
    $id             = $regPERS["idPERS"];
    $nombre         = utf8_encode($regPERS["nomPERS"]);
    $direccion      = utf8_encode($regPERS["dirPERS"]);
    $telefono       = $regPERS["telPERS"];
    $departamento   = utf8_encode($regPERS["dtoPERS"]);                
    // cerrar conexión
    mysql_close($conex);
?>
<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html" />
    <meta charset="utf-8" />
	<meta name="author" content="Curso Web 2.0 - BIOS" />
	<title>MiniSistema Personas - MASTER DETAIL-DEL</title>
    <link rel="stylesheet" href="EstilosPersonas.css"/>
    <script type="text/javascript" src="FuncionesPersonas.js"></script>
</head>

<body>
<!-- SECCION CABECERA -->
<?php
    include "head.inc";
?>
<!-- SECCION MENU -->
<?php
    include "menu.inc";
?>
<!-- SECCION CONTENIDO -->
<div id="contenido">
  <fieldset id="frm">
   <legend>Actualizar</legend>
   <form id="dataFRM" action="ProcesoPersonasUPD.php" method="POST">
     <table>
       <tr>
         <td>ID:</td>
         <td>
           <input id="dataID" 
                  type="text" 
                  name="ID"
                  maxlength="5"
                  title="Máximo 5 dígitos"
                  readonly="true"
           <?php
             echo "value='$id'"; 
             
           ?>                   
           />
         </td>
       </tr>     
       <tr>
         <td>Nombre:</td>
         <td>
           <input id="dataNOM" 
                  type="text" 
                  name="NOM"
                  maxlength="50"
                  title="Máximo 50 caracteres"
           <?php
             echo "value='$nombre'"; 
           ?>
           />
         </td>
       </tr>
       <tr>
         <td>Dirección:</td>
         <td>
           <input id="dataDIR" 
                  type="text" 
                  name="DIR"
                  maxlength="100"
           <?php
             echo "value='$direccion'"; 
           ?>                    
           />
         </td>
       </tr>
       <tr>
         <td>Teléfono:</td>
         <td>
           <input id="dataTEL" 
                  type="text" 
                  name="TEL" 
                  maxlength="15"
                  title="deshaiblitado"
           <?php
             echo "value='$telefono'"; 
           ?>                 
           />
         </td>
       </tr>
       <tr>
         <td>Departamento:</td>
         <td>
           <input id="dataDTO" 
                  type="text" 
                  name="DTO"
                  maxlength="30"
                  title="deshaiblitado"
           <?php
             echo "value='$departamento'"; 
           ?>                    
           />
         </td>
       </tr>
       
       <tr>
         <td colspan="2">
           <input type="button" value="Actualizar" onclick="CheckForm();"/>
           <input type="button" value="Cancelar"   onclick="SetPage('FormPersonasUPD.php');"/>
         </td>
       </tr>                            
     </table>
   </form>
  </fieldset>
</div>

</body>
</html>
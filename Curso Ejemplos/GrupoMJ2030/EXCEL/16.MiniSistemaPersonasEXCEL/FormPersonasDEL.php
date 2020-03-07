<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html" />
    <meta charset="utf-8" />
	<meta name="author" content="Curso Web 2.0 - BIOS" />
	<title>MiniSistema Personas - RELACIONES</title>
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
   <legend>Eliminar</legend>
   <form id="dataFRM" action="ProcesoPersonasConfirmDEL.php" method="POST">
     <table>
       <tr>
         <td>ID:</td>
         <td>
           <input id="dataID" 
                  type="text" 
                  name="ID"
                  maxlength="5"
                  title="Máximo 5 dígitos" 
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
                  title="deshaiblitado"
                  value="deshabilitado"
                  disabled="true" 
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
                  title="deshaiblitado"
                  value="deshabilitado"
                  disabled="true"                    
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
                  value="deshabilitado"
                  disabled="true"                   
           />
         </td>
       </tr>
       <tr>
         <td>Departamento:</td>
         <td>
           <select id="dataDTO" name="DTO" disabled="true" title="deshabilitado">
              <option value="0">-- Seleccione Dpto. --</option>
              <?php
                // crear lista desplegable
                // include "LoadDptos.inc";
                // NOTA:
                //  en este caso no ejecutamos el include
                //  porque la lista estará deshabilitada
              ?>                          
           </select>
         </td>
       </tr>
       
       <tr>
         <td colspan="2">
           <input type="button" value="Confirmar"   onclick="CheckID();"/>
           <input type="reset"  value="Cancelar" />
         </td>
       </tr>                            
     </table>
   </form>
  </fieldset>
</div>

</body>
</html>
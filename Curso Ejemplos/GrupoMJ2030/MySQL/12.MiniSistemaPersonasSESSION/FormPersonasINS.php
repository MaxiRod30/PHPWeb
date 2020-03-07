<?php
    // controlar logueado
    include "CtrlSession.inc";
?>
<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html" />
    <meta charset="utf-8" />
	<meta name="author" content="Curso Web 2.0 - BIOS" />
	<title>MiniSistema Personas - SESSION</title>
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
   <legend>Insertar</legend>
   <form id="dataFRM" action="ProcesoPersonasINS.php" method="POST">
     <table>
       <tr>
         <td>Nombre:</td>
         <td>
           <input id="dataNOM" 
                  type="text" 
                  name="NOM"
                  maxlength="50"
                  title="Máximo 50 caracteres" 
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
                  title="Máximo 100 caracteres"                   
           />
         </td>
       </tr>
       <tr>
         <td>Teléfono:</td>
         <td>
           <input id="dataTEL" 
                  type="text" 
                  name="TEL" 
                  value="+598"
                  maxlength="15"
                  title="Máximo 15 dígitos"                  
           />
         </td>
       </tr>
       <tr>
         <td>Departamento:</td>
         <td>
           <select id="dataDTO" name="DTO">
              <option value="0">-- Seleccione Dpto. --</option>
              <?php
                // crear opciones
                include "LoadDptos.inc";
              ?>                          
           </select>
         </td>
       </tr>
       <tr>
         <td colspan="2">
           <input type="button" value="Enviar"   onclick="CheckForm();"/>
           <input type="reset"  value="Cancelar" />
         </td>
       </tr>                            
     </table>
   </form>
  </fieldset>
</div>

</body>
</html>
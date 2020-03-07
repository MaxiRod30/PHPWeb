<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html" />
    <meta charset="utf-8" />
	<meta name="author" content="Curso Web 2.0 - BIOS" />

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
   <legend>Filtrar</legend>
   <form id="dataFRM" action="ProcesoPersonasVER.php" method="POST">
     <table>
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
           <input type="submit" value="Listar" />
           <input type="reset"  value="Cancelar" />
         </td>
       </tr>                            
     </table>
   </form>
  </fieldset>
</div>

</body>
</html>
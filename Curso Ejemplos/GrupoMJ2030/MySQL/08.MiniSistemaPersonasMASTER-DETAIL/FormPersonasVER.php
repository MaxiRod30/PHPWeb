<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html" />
    <meta charset="utf-8" />
	<meta name="author" content="Curso Web 2.0 - BIOS" />
	<title>MiniSistema Personas - MASTER DETAIL</title>
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
           <input id="dataDTO" 
                  type="text" 
                  name="DTO"
                  maxlength="30"
                  title="Máximo 30 caracteres"                   
           />
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
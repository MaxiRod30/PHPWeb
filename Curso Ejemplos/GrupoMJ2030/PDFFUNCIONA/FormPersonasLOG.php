<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html" />
    <meta charset="utf-8" />
	<meta name="author" content="Curso Web 2.0 - BIOS" />
	<title>MiniSistema Personas - COOKIES</title>
    <link rel="stylesheet" href="EstilosPersonas.css"/>
    <script type="text/javascript" src="FuncionesPersonas.js"></script>
</head>

<body>
<!-- SECCION CABECERA -->
<?php
    include "head.inc";
?>

<!-- SECCION CONTENIDO -->
<div id="contenido">
  <fieldset id="frm">
   <legend>Login</legend>
   <form id="dataFRM" action="ProcesoPersonasLOG.php" method="POST">
     <table>
       <tr>
         <td>Usuario:</td>
         <td>
           <input id="dataUSR" 
                  type="text" 
                  name="USR"
                  maxlength="10"
                  title="Máximo 10 caracteres" 
           />
         </td>
       </tr>
       <tr>
         <td>Contraseña:</td>
         <td>
           <input id="dataPSW" 
                  type="password" 
                  name="PSW"
                  maxlength="10"
                  title="Máximo 10 caracteres"                   
           />
         </td>
       </tr>
       <tr>
         <td colspan="2">
           <input type="button" value="Login"  onclick="CheckLOG();"/>
           <input type="reset"  value="Cancelar" />
         </td>
       </tr>
       <tr>
         <td colspan="2" style="text-align: rigth;">
           <a class="reg" href="FormPersonasREG.php">Registrarse</a>
         </td>
       </tr>                                   
     </table>
   </form>
  </fieldset>
</div>

</body>
</html>
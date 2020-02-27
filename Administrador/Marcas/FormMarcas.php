<?php
echo '
<div class="boxRegistro">
<h1>Ingreso de Marca</h1>
<form id="dataFRM_MARCAS" action="ProcesoIngresarMarcas.php" method="POST">
  <hr>      
  <label id="icon" for="name"><i class="icon-user"></i></label>
  <input type="text" name="nameMarca" id="idMarca" placeholder="Ingrese nombre de la Marca" required/>

  <hr>
  <a href="#" class="button" onclick="CheckMARCA("idMarca", "dataFRM_MARCAS")">Guardar Marca</a>
</form>

</div>
';
?>
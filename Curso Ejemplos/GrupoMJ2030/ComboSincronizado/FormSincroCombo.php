<!DOCTYPE html>
<html lang="es">

<head>
	<meta http-equiv="content-type" content="text/html" />
    <meta charset="utf-8" />
	<meta name="author" content="Curso WEB 2.0 - BIOS" />
	<title>Ejemplo Combo box sincronizado</title>
</head>

<body>
 <h1>Ejemplo Combo Box sincronizado</h1>
 
 <select id="dataPAIS" name="PAIS" onchange="LoadComboEstado(this.value);">
   <option value="0">Seleccione País</option>
   <?php
        include "LoadPAIS.inc";
   ?>   
 </select>
 <select id="dataESTADO" name="ESTADO">
   <option value="0">Seleccione Estado</option>
   <?php
        include "LoadESTADO.inc";
   ?>    
 </select>

</body>
</html>
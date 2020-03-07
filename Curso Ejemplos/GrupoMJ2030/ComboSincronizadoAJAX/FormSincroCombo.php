<!DOCTYPE html>
<html lang="es">

<head>
	<meta http-equiv="content-type" content="text/html" />
    <meta charset="utf-8" />
	<meta name="author" content="Curso WEB 2.0 - BIOS" />
	<title>Ejemplo Combo box sincronizado</title>
    <script type="text/javascript">

        function LoadComboEstado(id) {
            // inicializar Objeto AJAX
            var xhr;
            if (window.XMLHttpRequest) {
                // crear objeto para chrome, fx, opera, safari, ie7+
                xhr = new XMLHttpRequest;
            } else {
                // crear objeto para IE5,IE6
                xhr = new ActiveXObject("Microsoft.XMLHTTP");
            } // endif
            
            // realizar petición
            xhr.open("GET","ProcesoLoadEstado.php?IDP="+id,true);
            xhr.send(null);
            
            // controlar petición
            xhr.onreadystatechange = function() {
                // window.alert(xhr.readyState);
                if (xhr.readyState==4 && xhr.status==200) {
                    document.getElementById("dataESTADO").innerHTML = xhr.responseText;
                } // endif
            } // end function
        } // end function      
    
    </script>
</head>

<body>
 <h1>Ejemplo Combo Box sincronizado</h1>
 
 <select id="dataPAIS" name="PAIS" onchange="LoadComboEstado(this.value);">
   <option value="0">Seleccione País</option>
   <?php
        include "LoadPAIS.inc";
   ?>   
 </select>
 <select id="dataESTADO" name="ESTADO" onchange="window.alert('y?');">
   <option value="0">Seleccione Estado</option>
 </select>

</body>
</html>
/* funciones para buscar personas AJAX */

function buscarPERS(dato) {
    // inicializar Objeto AJAX
    var xhr;
    if (window.XMLHttpRequest) {
        // crear objeto para chrome, fx, opera, safari
        xhr = new XMLHttpRequest;
    } else {
        // crear objeto para IE5,IE6
        xhr = new ActiveXObject("Microsoft.XMLHTTP");
    } // endif
    
    // realizar petición
    xhr.open("POST","ProcesoBuscoPersona.php?NOM="+dato,true);
    xhr.send(null);
    
    // controlar petición
    xhr.onreadystatechange = function() {
        // window.alert(xhr.readyState);
        if (xhr.readyState==4 && xhr.status==200) {
            document.getElementById("muestraREG").innerHTML = xhr.responseText;
        } // endif
    } // end function
} // end function  
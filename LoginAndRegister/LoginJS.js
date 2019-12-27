// *****************************************************************
function CheckLOG() {
    // preparar mensaje y control de error
    window.alert("Entre");
    var mensaje = "POR FAVOR!: \n";
    var error = false;
    // capturar datos del formulario
    var usuario = document.getElementById("idUSER").value;
    var pass = document.getElementById("idPASS").value;

    // validar datos
    if (usuario == "") {
        error = true;
        mensaje = mensaje + "Se requiere Nombre de Usuario\n";
    } // endif
    if (pass == "") {
        error = true;
        mensaje = mensaje + "Se requiere Contraseña\n";
    } // endif

    // controlar error
    if (error) {
        // mostrar mensaje de error
        window.alert(mensaje);
    } else {
        // enviar formulario
        document.getElementById("dataFRM_LOG").submit();
    } // endif                        
} // end function

// *****************************************************************
function CheckREG(id) {
    // preparar mensaje y control de error

    var mensaje = "POR FAVOR!: \n";
    var error = false;
    // capturar datos del formulario
    var nombre = document.getElementById("idNOM").value;
    var usuario = document.getElementById("idUSER").value;
    var pass = document.getElementById("idPASS").value;

    // validar datos
    if ((usuario == "") || (document.getElementById(id).src == "http://127.0.0.1/BIOS/Proyecto/Image/tick-rojo.jpg")) {
        error = true;
        mensaje = mensaje + "Se requiere usuario unico\n";
    } // endif
    if (pass == "") {
        error = true;
        mensaje = mensaje + "Se requiere contraseña\n";
    } // endif
    if (nombre == "") {
        error = true;
        mensaje = mensaje + "Se requiere nombre\n";
    } // endif
    // controlar error
    if (error) {
        // mostrar mensaje de error
        window.alert(mensaje);
    } else {
        // enviar formulario
        document.getElementById("dataFRM_REG").submit();
    } // endif                        
} // end function

// *****************************************************************
function stateVAR(str, id) {

    if (str.length == 0) {
        document.getElementById(id).src = "../Image/tick-rojo.jpg";
    } else {
        document.getElementById(id).src = "../Image/tick-verde.jpg";
    }
}

// *****************************************************************
function showHint(str, id) {

    if (str.length == 0) {
        document.getElementById(id).src = "../Image/tick-rojo.jpg";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById(id).src = this.responseText;
            }
        };
        xmlhttp.open("GET", "ProcesoRegAJAX.php?IDUSR=" + str, true);
        xmlhttp.send();
    }
}
// ****************************************************************
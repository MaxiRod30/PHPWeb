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
    var contraseñAnt = document.getElementById("idPASSant").value;
    var contraseñNue = document.getElementById("idPASSnue").value;
    var contraseñRep = document.getElementById("idPASSrep").value;

    // validar datos
    if ((contraseñAnt == "") || (document.getElementById(id).src == "http://127.0.0.1/BIOS/Proyecto/Image/tick-rojo.jpg")) {
        error = true;
        mensaje = mensaje + "Se requiere la correcta contraseña anterior unico\n";
    } // endif
    if (contraseñNue == "") {
        error = true;
        mensaje = mensaje + "Se requiere contraseña nueva\n";
    } // endif
    if (contraseñRep == "") {
        error = true;
        mensaje = mensaje + "Se requiere nombre\n";
    } // endif
    if (contraseñRep == contraseñNue) {
        error = true;
        mensaje = mensaje + "Se requiere contraseñas nuevas iguales\n";
    } // endif
    // controlar error
    if (error) {
        // mostrar mensaje de error
        window.alert(mensaje);
    } else {
        // enviar formulario
        document.getElementById("dataFRM_CAMB").submit();
    } // endif                        
} // end function

// *****************************************************************
function stateVAR(str, id, comp_id, comp_id2) {

    if ((str.length == 0) && (str == document.getElementById(comp_id).innerText)) {
        document.getElementById(id).src = "../Image/tick-rojo.jpg";
    } else {
        if (document.getElementById(comp_id).innerText == document.getElementById(comp_id2).innerText) {
            document.getElementById(id).src = "../Image/tick-verde.jpg";
        } else {
            document.getElementById(id).src = "../Image/tick-rojo.jpg";
        }

        alert("el valor es: " + str + "   " + document.getElementById(comp_id).value);
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
        xmlhttp.open("GET", "ProcesoCAMB.php?NAME=" + str, true);
        xmlhttp.send();
    }
}
// ****************************************************************
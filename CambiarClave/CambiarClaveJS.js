// *****************************************************************
function CheckREG(id1, id2, id3) {
    // preparar mensaje y control de error
    var mensaje = "POR FAVOR!: \n";
    var error = false;
    // capturar datos del formulario idPASSant idPASSnue idPASSrep
    var contraseñAnt = document.getElementById(id1).value;
    var contraseñNue = document.getElementById(id2).value;
    var contraseñRep = document.getElementById(id3).value;

    // validar datos
    if (contraseñAnt == "") {
        error = true;
        mensaje = mensaje + "Se requiere la correcta contraseña anterior\n";
    } // endif
    if (contraseñNue == "") {
        error = true;
        mensaje = mensaje + "Se requiere escribir contraseña nueva\n";
    } // endif
    if (contraseñRep == "") {
        error = true;
        mensaje = mensaje + "Se requiere repetir contraseña\n";
    } // endif
    if (contraseñRep != contraseñNue) {
        error = true;
        mensaje = mensaje + "Se requiere contraseñas nuevas iguales\n";
    } // endif
    // controlar error
    if (error) {
        // mostrar mensaje de error
        window.alert(mensaje + contraseñRep + contraseñNue);
    } else {
        // enviar formulario
        document.getElementById("dataFRM_CAMB").submit();
    } // endif                        
} // end function

// ****************************************************************
function SetPage(url) {
    // redirigir a la url especificada
    window.location = url;
} // end function
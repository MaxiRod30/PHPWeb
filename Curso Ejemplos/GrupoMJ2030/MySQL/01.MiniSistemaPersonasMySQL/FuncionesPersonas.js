/* DEFINICION DE FUNCIONES PARA MINISISTEMA PERSONAS FICHEROS */

function CheckForm() {
    // preparar mensaje y control de error
    var mensaje = "ATENCION!!!... ta mal:\n";
    var error   = false;
    // capturar datos del formulario
    var nombre          = document.getElementById("dataNOM").value;
    var direccion       = document.getElementById("dataDIR").value;
    var telefono        = document.getElementById("dataTEL").value;
    var departamento    = document.getElementById("dataDTO").value;
    // validar datos
    if (nombre=="") {
        error   = true;
        mensaje = mensaje+"Nombre\n";
    } // endif
    if (direccion=="") {
        error   = true;
        mensaje = mensaje+"Dirección\n";
    } // endif
    if (telefono=="") {
        error   = true;
        mensaje = mensaje+"Teléfono no puede ser vacío\n";
    } // endif
    if (telefono=="+598") {
        error   = true;
        mensaje = mensaje+"Teléfono no puede ser código de país\n";
    } // endif
    if (isNaN(telefono)) {  // is Not a Number
        error   = true;
        mensaje = mensaje+"Teléfono debe ser numérico\n";
    } // endif        
    if (departamento=="") {
        error   = true;
        mensaje = mensaje+"Departamento\n";
    } // endif
    
    // controlar error
    if (error) {
        // mostrar mensaje de error
        window.alert(mensaje);
    } else {
        // enviar formulario
        document.getElementById("dataFRM").submit();
    } // endif                        
} // end function
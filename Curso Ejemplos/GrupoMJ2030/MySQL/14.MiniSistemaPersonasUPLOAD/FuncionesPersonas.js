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
    if (departamento=="0") {
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

function CheckID() {
    // preparar mensaje y control de error
    var mensaje = "ATENCION!!!... ta mal:\n";
    var error   = false;
    // capturar datos del formulario
    var id = document.getElementById("dataID").value;    
    // validar datos
    if (id=="") {
        error   = true;
        mensaje = mensaje+"ID vacío\n";
    } // endif
    if (isNaN(id)) {    // is Not a Number
        error   = true;
        mensaje = mensaje+"ID debe ser numérico\n";
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

function ConfirmaDEL() {
    // confirmar eliminar registro
    var confirma = window.confirm("está seguro de eliminar el registro?");
    // evaluar confirmación
    if (confirma) {
        // enviar formulario
        document.getElementById("dataFRM").submit();
    } else {
        SetPage('FormPersonasDEL.php');
    } // endif
} // end function

function SetPage(url) {
    // redirigir a la url especificada
    window.location=url;
}// end function

function ConfirmaDELLST(id,filtro,orden,tipo) {
    // window.alert('ProcesoDEL.php?ID='+id+'&DTO='+filtro+'&ORD='+orden+'&TIPO='+tipo);
    // confirmar eliminar registro
    var confirma = window.confirm("está seguro de eliminar el registro?");
    // evaluar confirmación
    if (confirma) {
        // enviar al proceso de liminación
        window.location = 'ProcesoDEL.php?ID='+id+'&DTO='+filtro+'&ORD='+orden+'&TIPO='+tipo
    } // endif
} // end function

function CheckID() {
    // preparar mensaje y control de error
    var mensaje = "ATENCION!!!... ta mal:\n";
    var error   = false;
    // capturar datos del formulario
    var id = document.getElementById("dataID").value;    
    // validar datos
    if (id=="") {
        error   = true;
        mensaje = mensaje+"ID vacío\n";
    } // endif
    if (isNaN(id)) {    // is Not a Number
        error   = true;
        mensaje = mensaje+"ID debe ser numérico\n";
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

function CheckLOG() {
    // preparar mensaje y control de error
    var mensaje = "ATENCION!!!... ta mal:\n";
    var error   = false;
    // capturar datos del formulario
    var usuario = document.getElementById("dataUSR").value;    
    var pass    = document.getElementById("dataPSW").value;
       
    // validar datos
    if (usuario=="") {
        error   = true;
        mensaje = mensaje+"Se requiere Nombre de Usuario\n";
    } // endif
    if (pass=="") {
        error   = true;
        mensaje = mensaje+"Se requiere Contraseña\n";
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

function CheckREG() {
    // preparar mensaje y control de error
    var mensaje = "ATENCION!!!... ta mal:\n";
    var error   = false;
    // capturar datos del formulario
    var usuario = document.getElementById("dataUSR").value;    
    var pass1   = document.getElementById("dataPSW1").value;
    var pass2   = document.getElementById("dataPSW2").value;        
    // validar datos
    if (usuario=="") {
        error   = true;
        mensaje = mensaje+"Se requiere Nombre de Usuario\n";
    } // endif
    if (pass1=="") {
        error   = true;
        mensaje = mensaje+"Se requiere Contraseña\n";
    } // endif
    if (pass2=="") {
        error   = true;
        mensaje = mensaje+"Repita Contraseña\n";
    } // endif        
    if (pass2!=pass1) {
        error   = true;
        mensaje = mensaje+"Las contraseñas deben ser iguales\n";        
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
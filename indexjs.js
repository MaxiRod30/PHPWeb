function menu_iz_open() {
    document.getElementById("menu_usr_iz").style.display = "block";
}

function menu_dr_open() {
    document.getElementById("menu_usr_dr").style.display = "block";
}

function menu_close() {
    document.getElementById("menu_usr_dr").style.display = "none";
    document.getElementById("menu_usr_iz").style.display = "none";
}

// ****************************************************************
function CheckMARCA(id, form) {
    // preparar mensaje y control de error

    var mensaje = "POR FAVOR!: \n";
    var error = false;
    // capturar datos del formulario
    var nomMarca = document.getElementById(id).value;
    // validar datos
    if (nomMarca == "") {
        error = true;
        mensaje = mensaje + "Escriba una marca Por Favor!\n";
    } // endif
    // controlar error
    if (error) {
        // mostrar mensaje de error
        window.alert(mensaje);
    } else {
        // enviar formulario
        document.getElementById(form).submit();
    } // endif                        
} // end function
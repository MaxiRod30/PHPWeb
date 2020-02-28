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
function CheckMARCA() {
    // preparar mensaje y control de error;
    var mensaje = "POR FAVOR!: \n";
    var error = false;
    // capturar datos del formulario
    var nomMarca = document.getElementById("idMarca").value;
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
        document.getElementById("dataFRM_MARCAS").submit();
    } // endif                        
} // end function
// ****************************************************************

// ****************************************************************
function CheckMARCA_UP() {
    // preparar mensaje y control de error;

    var mensaje = "POR FAVOR!: \n";
    var error = false;
    // capturar datos del formulario
    var MarcaID = document.getElementById("idMarcaID");
    var MarcaNOM = document.getElementById("idMarcaNOM").value;
    // validar datos
    if (MarcaNOM == "") {
        error = true;
        mensaje = mensaje + "Escriba una marca Por Favor!\n";
    } // endif
    // controlar error
    if (error) {
        // mostrar mensaje de error
        window.alert(mensaje);
    } else {
        // enviar formulario
        document.getElementById("idMarcaID").disabled = false;
        document.getElementById("dataFRM_MARCAS_UP").submit();
    } // endif                        
} // end function

// ****************************************************************

function ConfirmaDELLST(id, orden, tipo) {
    // window.alert('ProcesoDEL.php?ID='+id+'&DTO='+filtro+'&ORD='+orden+'&TIPO='+tipo);
    // confirmar eliminar registro
    var confirma = window.confirm("está seguro de eliminar el registro?");
    // evaluar confirmación
    if (confirma) {
        // enviar al proceso de liminación
        window.location = 'Administrador/Marcas/ProcesoEliminarMarca.php?ID=' + id + '&ORD=' + orden + '&TIPO=' + tipo
    } // endif
} // end function
// ****************************************************************
function CheckCATEGORIA() {
    // preparar mensaje y control de error;
    var mensaje = "POR FAVOR!: \n";
    var error = false;
    // capturar datos del formulario
    var nomCategoria = document.getElementById("idCategoria").value;
    // validar datos
    if (nomCategoria == "") {
        error = true;
        mensaje = mensaje + "Escriba una marca Por Favor!\n";
    } // endif
    // controlar error
    if (error) {
        // mostrar mensaje de error
        window.alert(mensaje);
    } else {
        // enviar formulario
        document.getElementById("dataFRM_CATEGORIA").submit();
    } // endif                        
} // end function

// ****************************************************************
function ConfirmaDELCAT(id, orden, tipo) {
    // window.alert('ProcesoDEL.php?ID='+id+'&DTO='+filtro+'&ORD='+orden+'&TIPO='+tipo);
    // confirmar eliminar registro
    var confirma = window.confirm("está seguro de eliminar el registro?");
    // evaluar confirmación
    if (confirma) {
        // enviar al proceso de liminación
        window.location = 'Administrador/Categoria/ProcesoEliminarCategoria.php?ID=' + id + '&ORD=' + orden + '&TIPO=' + tipo
    } // endif
} // end function
// ****************************************************************
function CheckCATEGORIA_UP() {
    // preparar mensaje y control de error;

    var mensaje = "POR FAVOR!: \n";
    var error = false;
    // capturar datos del formulario
    var CategoriaID = document.getElementById("idCategoriaID");
    var CategoriaNOM = document.getElementById("idCategoriaNOM").value;
    // validar datos
    if (CategoriaNOM == "") {
        error = true;
        mensaje = mensaje + "Escriba una categoria Por Favor!\n";
    } // endif
    // controlar error
    if (error) {
        // mostrar mensaje de error
        window.alert(mensaje);
    } else {
        // enviar formulario
        document.getElementById("idCategoriaID").disabled = false;
        document.getElementById("dataFRM_CATEGORIA_UP").submit();
    } // endif                        
} // end function
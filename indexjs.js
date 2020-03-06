function menu_iz_open() {
    document.getElementById("menu_usr_iz").style.display = "block";
}

function menu_dr_open() {
    document.getElementById("menu_usr_dr").style.display = "block";
}

function menu_closeMOD() {
    document.getElementById("menu_usr_dr").style.display = "none";
    document.getElementById("menu_usr_iz").style.display = "none";
    ActualizarTabla('lst', 'idBUSNombre', 'idCategoria', 'idMarca', 'idOrigen', 'idPrecioMin', 'idPrecioMax', 'idEstado', 'idBUSID', 'productoCATEG', 'asc');
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
function ConfirmaDELCAT(id, orden, tipo, nombre) {
    // window.alert('ProcesoDEL.php?ID='+id+'&DTO='+filtro+'&ORD='+orden+'&TIPO='+tipo);
    // confirmar eliminar registro
    var confirma = window.confirm("está seguro de eliminar el registro?");
    // evaluar confirmación
    if (confirma) {
        // enviar al proceso de liminación
        window.location = 'Administrador/Categoria/ProcesoEliminarCategoria.php?ID=' + id + '&ORD=' + orden + '&TIPO=' + tipo + '&NOM=' + nombre
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

// ****************************************************************
function CheckPRODUCTO() {
    // preparar mensaje y control de error;
    var mensaje = "POR FAVOR!: \n";
    var error = false;
    // capturar datos del formulario
    var nombreProducto = document.getElementById("idProductoNOM").value;
    var descripcionProducto = document.getElementById("idProductoDESCR").value;
    var idProductoPRECIO = document.getElementById("idProductoPRECIO").value;
    var idProductoCategoria = document.getElementById("idCategoria").value;
    var idProductoMarcas = document.getElementById("idMarca").value;
    var idProductoOrigen = document.getElementById("idOrigen").value;
    var idProductoEstado = document.getElementById("idEstado").value;
    var file = document.forms['dataFRM_PRODUCTO']['idfile'].files[0];


    // validar datos
    if (nombreProducto == "") {
        error = true;
        mensaje = mensaje + "Escriba nombre del producto Por Favor!\n";
    } // endif
    if (descripcionProducto == "") {
        error = true;
        mensaje = mensaje + "Escriba descripcion del producto Por Favor!\n";
    } // endif
    if (idProductoPRECIO == "") {
        error = true;
        mensaje = mensaje + "Escriba Precio del producto Por Favor!\n";
    } // endif
    if (idProductoCategoria == 0) {
        error = true;
        mensaje = mensaje + "Elija una categoria para el producto Por Favor!\n";
    } // endif
    if (idProductoMarcas == 0) {
        error = true;
        mensaje = mensaje + "Elija una marca para el producto Por Favor!\n";
    } // endif
    if (idProductoOrigen == "") {
        error = true;
        mensaje = mensaje + "Elija un origen para el producto Por Favor!\n";
    } // endif
    if (idProductoEstado == "") {
        error = true;
        mensaje = mensaje + "Elija un estado para el producto Por Favor!\n";
    } // endif
    if (file == undefined) {
        error = true;
        mensaje = mensaje + "Elija una foto para su producto Por Favor!\n";
    } // endif
    // controlar error
    if (error) {
        // mostrar mensaje de error
        window.alert(mensaje);
    } else {
        // enviar formulario

        document.getElementById("dataFRM_PRODUCTO").submit();
    } // endif                        
} // end function

// *****************************************************************
function ActualizarTabla(idtable, idNom, idCategoria, idMarcas, idOrigen, idPrecioMin, idPrecioMax, idEstado, idproducto, ORDproducto, TIPOproducto) {

    var nombreproduc = document.getElementById(idNom).value;
    var categoriaproduc = document.getElementById(idCategoria).value;
    var marcasproduc = document.getElementById(idMarcas).value;
    var origenproduc = document.getElementById(idOrigen).value;
    var PrecioMinproduc = document.getElementById(idPrecioMin).value;
    var PrecioMaxproduc = document.getElementById(idPrecioMax).value;
    var Estadoproduc = document.getElementById(idEstado).value;
    var IDproduc = document.getElementById(idproducto).value;


    var tabla = `<thead>
    <tr>
    <th>
        <a onclick="ActualizarTabla('lst','idBUSNombre','idCategoria','idMarca','idOrigen','idPrecioMin','idPrecioMax','idEstado', 'idBUSID','productoID','asc');">
            <img class='btn' src='Image/btnUp.png' />
        </a>  
        ID
        <a onclick="ActualizarTabla('lst','idBUSNombre','idCategoria','idMarca','idOrigen','idPrecioMin','idPrecioMax','idEstado', 'idBUSID','productoID','desc');" >
            <img class='btn' src='Image/btnDown.png' />
        </a>               
    </th>
    <th>
        <a onclick="ActualizarTabla('lst','idBUSNombre','idCategoria','idMarca','idOrigen','idPrecioMin','idPrecioMax','idEstado', 'idBUSID','productoNOM','asc');" >
            <img class='btn' src='Image/btnUp.png' />
        </a>  
        Nombre
        <a onclick="ActualizarTabla('lst','idBUSNombre','idCategoria','idMarca','idOrigen','idPrecioMin','idPrecioMax','idEstado', 'idBUSID','productoNOM','desc');" >
            <img class='btn' src='Image/btnDown.png' />
        </a>               
    </th>
    <th>
        <a onclick="ActualizarTabla('lst','idBUSNombre','idCategoria','idMarca','idOrigen','idPrecioMin','idPrecioMax','idEstado', 'idBUSID','productoDESCRIP','asc');" >
            <img class='btn' src='Image/btnUp.png' />
        </a>  
        Descripcion
        <a onclick="ActualizarTabla('lst','idBUSNombre','idCategoria','idMarca','idOrigen','idPrecioMin','idPrecioMax','idEstado', 'idBUSID','productoDESCRIP','desc');">
            <img class='btn' src='Image/btnDown.png' />
        </a>               
    </th>
    <th>
        <a onclick="ActualizarTabla('lst','idBUSNombre','idCategoria','idMarca','idOrigen','idPrecioMin','idPrecioMax','idEstado', 'idBUSID','productoPRECIO','asc');">
            <img class='btn' src='Image/btnUp.png' />
        </a>  
        Precio
        <a onclick="ActualizarTabla('lst','idBUSNombre','idCategoria','idMarca','idOrigen','idPrecioMin','idPrecioMax','idEstado', 'idBUSID','productoPRECIO','desc');">
            <img class='btn' src='Image/btnDown.png' />
        </a>               
    </th>
    <th>
        <a onclick="ActualizarTabla('lst','idBUSNombre','idCategoria','idMarca','idOrigen','idPrecioMin','idPrecioMax','idEstado', 'idBUSID','productoMARCA','asc');">
        <img class='btn' src='Image/btnUp.png' />
        </a>  
        Marca
        <a onclick="ActualizarTabla('lst','idBUSNombre','idCategoria','idMarca','idOrigen','idPrecioMin','idPrecioMax','idEstado', 'idBUSID','productoMARCA','desc');">
        <img class='btn' src='Image/btnDown.png' />
        </a>               
    </th>
    <th>
        <a onclick="ActualizarTabla('lst','idBUSNombre','idCategoria','idMarca','idOrigen','idPrecioMin','idPrecioMax','idEstado', 'idBUSID','productoCATEG','asc');">
        <img class='btn' src='Image/btnUp.png' />
        </a>  
        Categoria
        <a onclick="ActualizarTabla('lst','idBUSNombre','idCategoria','idMarca','idOrigen','idPrecioMin','idPrecioMax','idEstado', 'idBUSID','productoCATEG','desc');">
        <img class='btn' src='Image/btnDown.png' />
        </a>               
    </th>
    <th>
        <a onclick="ActualizarTabla('lst','idBUSNombre','idCategoria','idMarca','idOrigen','idPrecioMin','idPrecioMax','idEstado', 'idBUSID','productoPAIS','asc');">
        <img class='btn' src='Image/btnUp.png' />
        </a>  
        Origen
        <a onclick="ActualizarTabla('lst','idBUSNombre','idCategoria','idMarca','idOrigen','idPrecioMin','idPrecioMax','idEstado', 'idBUSID','productoPAIS','desc');">
        <img class='btn' src='Image/btnDown.png' />
        </a>               
    </th>
    <th>
    <a onclick="ActualizarTabla('lst','idBUSNombre','idCategoria','idMarca','idOrigen','idPrecioMin','idPrecioMax','idEstado', 'idBUSID','productoACT','asc');">
        <img class='btn' src='Image/btnUp.png' />
    </a>  
    Estado
    <a onclick="ActualizarTabla('lst','idBUSNombre','idCategoria','idMarca','idOrigen','idPrecioMin','idPrecioMax','idEstado', 'idBUSID','productoACT','desc');">
        <img class='btn' src='Image/btnDown.png' />
    </a>               
    </th>
    <th>
        Foto           
    </th>
    <th>
        UPD
    </th>         
    </tr> 
    </thead>`;

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById(idtable).innerHTML = tabla + this.responseText;
        }
    };
    xmlhttp.open("GET", "Administrador/ProductoModificar/FiltrarProducto.php?FNOM=" + nombreproduc + "&FCAT=" + categoriaproduc + "&FMAR=" + marcasproduc + "&FORG=" + origenproduc + "&FPMIN=" + PrecioMinproduc + "&FPMAX=" + PrecioMaxproduc + "&FEST=" + Estadoproduc + "&FID=" + IDproduc + "&ORD=" + ORDproducto + "&TIP=" + TIPOproducto, true);
    xmlhttp.send();
}

// ****************************************************************
function CheckPRODUCTOMOD() {
    // preparar mensaje y control de error;

    var mensaje = "POR FAVOR!: \n";
    var error = false;
    // capturar datos del formulario
    var nombreProducto = document.getElementById("idProductoNOM").value;
    var descripcionProducto = document.getElementById("idProductoDESCR").value;
    var idProductoPRECIO = document.getElementById("idProductoPRECIO").value;
    var idProductoCategoria = document.getElementById("idCategoria").value;
    var idProductoMarcas = document.getElementById("idMarca").value;
    var idProductoOrigen = document.getElementById("idOrigen").value;
    var idProductoEstado = document.getElementById("idEstado").value;

    // validar datos
    if (nombreProducto == "") {
        error = true;
        mensaje = mensaje + "Escriba nombre del producto Por Favor!\n";
    } // endif
    if (descripcionProducto == "") {
        error = true;
        mensaje = mensaje + "Escriba descripcion del producto Por Favor!\n";
    } // endif
    if (idProductoPRECIO == "") {
        error = true;
        mensaje = mensaje + "Escriba Precio del producto Por Favor!\n";
    } // endif
    if (idProductoCategoria == 0) {
        error = true;
        mensaje = mensaje + "Elija una categoria para el producto Por Favor!\n";
    } // endif
    if (idProductoMarcas == 0) {
        error = true;
        mensaje = mensaje + "Elija una marca para el producto Por Favor!\n";
    } // endif
    if (idProductoOrigen == "") {
        error = true;
        mensaje = mensaje + "Elija un origen para el producto Por Favor!\n";
    } // endif
    if (idProductoEstado == "") {
        error = true;
        mensaje = mensaje + "Elija un estado para el producto Por Favor!\n";
    } // endif
    // controlar error
    if (error) {
        // mostrar mensaje de error
        window.alert(mensaje);
    } else {
        // enviar formulario
        document.getElementById("idProductoID").disabled = false;
        document.getElementById("dataFRM_PRODUCTOMOD").submit();
    } // endif                        
} // end function
// *****************************************************************
function ActualizarProductoConsumidor(idtable, idNom, idCategoria, idMarcas, idOrigen, idPrecioMin, idPrecioMax, idproducto, ORDproducto, TIPOproducto) {

    var nombreproduc = document.getElementById(idNom).value;
    var categoriaproduc = document.getElementById(idCategoria).value;
    var marcasproduc = document.getElementById(idMarcas).value;
    var origenproduc = document.getElementById(idOrigen).value;
    var PrecioMinproduc = document.getElementById(idPrecioMin).value;
    var PrecioMaxproduc = document.getElementById(idPrecioMax).value;
    var IDproduc = document.getElementById(idproducto).value;

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById(idtable).innerHTML = this.responseText;
            console.log(this.responseText);
        }
    };
    xmlhttp.open("GET", "Consumidor/Filtros/FiltroBuscarProducto.php?FNOM=" + nombreproduc + "&FCAT=" + categoriaproduc + "&FMAR=" + marcasproduc + "&FORG=" + origenproduc + "&FPMIN=" + PrecioMinproduc + "&FPMAX=" + PrecioMaxproduc + "&FID=" + IDproduc + "&ORD=" + ORDproducto + "&TIP=" + TIPOproducto, true);
    xmlhttp.send();
}
// *****************************************************************
function imprimirproducto(idtable, idNom, idCategoria, idMarcas, idOrigen, idPrecioMin, idPrecioMax, idproducto, ORDproducto, TIPOproducto) {

    var nombreproduc = document.getElementById(idNom).value;
    var categoriaproduc = document.getElementById(idCategoria).value;
    var marcasproduc = document.getElementById(idMarcas).value;
    var origenproduc = document.getElementById(idOrigen).value;
    var PrecioMinproduc = document.getElementById(idPrecioMin).value;
    var PrecioMaxproduc = document.getElementById(idPrecioMax).value;
    var IDproduc = document.getElementById(idproducto).value;

    window.location = "Consumidor/ListarTodo/imprimirPDF.php?FNOM=" + nombreproduc + "&FCAT=" + categoriaproduc + "&FMAR=" + marcasproduc + "&FORG=" + origenproduc + "&FPMIN=" + PrecioMinproduc + "&FPMAX=" + PrecioMaxproduc + "&FID=" + IDproduc + "&ORD=" + ORDproducto + "&TIP=" + TIPOproducto;

}
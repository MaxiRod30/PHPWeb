<link rel="stylesheet" href="Estilos/styleProductoMod.css" />

<div class="boxRegistro">
<h1>Buscar Producto</h1>
        <form id="dataFRM_FILTRO" action="Administrador/Producto/FiltrarProducto.php" method="POST" class="formulario">
            <hr>
            <label id="icon" for="name"><i class="icon-user"></i></label>
            <input onkeyup="ActualizarTabla('lst','idBUSNombre','idCategoria','idMarca','idOrigen','idPrecioMin','idPrecioMax','idEstado', 'idBUSID','productoID','asc');" type="text" name="nameBUSNombre" id="idBUSNombre" placeholder="Ingrese nombre del Producto" required/>
            
            <label id="icon" for="name"><i class="icon-user"></i></label>
            <select onchange="ActualizarTabla('lst','idBUSNombre','idCategoria','idMarca','idOrigen','idPrecioMin','idPrecioMax','idEstado', 'idBUSID','productoID','asc');" id="idCategoria" name="nameCategoria">
              <option value="0">-- Seleccione Categoria. --</option>
              <?php
                // crear opciones
                include "CargarComboCategorias.php";
              ?> 
            </select>

            <label id="icon" for="name"><i class="icon-user"></i></label>
            <input onkeyup="ActualizarTabla('lst','idBUSNombre','idCategoria','idMarca','idOrigen','idPrecioMin','idPrecioMax','idEstado', 'idBUSID','productoID','asc');" type="text" name="namePrecioMin" id="idPrecioMin" placeholder="Ingrese Precio minimo" required/>
            
            <label id="icon" for="name"><i class="icon-user"></i></label>
            <select onchange="ActualizarTabla('lst','idBUSNombre','idCategoria','idMarca','idOrigen','idPrecioMin','idPrecioMax','idEstado', 'idBUSID','productoID','asc');" id="idMarca" name="nameMarca">
              <option value="0">-- Seleccione Marcas. --</option>
              <?php
                // crear opciones
                include "CargarComboMarcas.php";
              ?> 
            </select>

            <label id="icon" for="name"><i class="icon-user"></i></label>
            <input onkeyup="ActualizarTabla('lst','idBUSNombre','idCategoria','idMarca','idOrigen','idPrecioMin','idPrecioMax','idEstado', 'idBUSID','productoID','asc');" type="text" name="namePrecioMax" id="idPrecioMax" placeholder="Ingrese Precio maximo" required/>

            <label id="icon" for="name"><i class="icon-user"></i></label>
            <select onchange="ActualizarTabla('lst','idBUSNombre','idCategoria','idMarca','idOrigen','idPrecioMin','idPrecioMax','idEstado', 'idBUSID','productoID','asc');" id="idOrigen" name="nameOrigen">
              <option value="">-- Seleccione Origen. --</option>
              <option value="China">China</option>
              <option value="UK">UK</option>
              <option value="USA">USA</option>         
            </select>

            <label id="icon" for="name"><i class="icon-user"></i></label>
            <input onkeyup="ActualizarTabla('lst','idBUSNombre','idCategoria','idMarca','idOrigen','idPrecioMin','idPrecioMax','idEstado', 'idBUSID','productoID','asc');" type="text" name="nameBUSID" id="idBUSID" placeholder="Ingrese ID del Producto" required/>
            
            <label   id="icon" for="name"><i class="icon-user"></i></label>
            <select onchange="ActualizarTabla('lst','idBUSNombre','idCategoria','idMarca','idOrigen','idPrecioMin','idPrecioMax','idEstado', 'idBUSID','productoID','asc');" id="idEstado" name="nameEstado">
              <option value="">-- Seleccione Estado. --</option>
              <option value="Activo">Activo</option>
              <option value="De baja">De baja</option>    
            </select>
            <hr>
        </form>

        <h1>Lista de Producto</h1>
    <div id="contenido">
    <fieldset id="dsc">
     <legend>Listado</legend>
        <table id="lst">

        </table>
        </fieldset>
      </div>
</div>

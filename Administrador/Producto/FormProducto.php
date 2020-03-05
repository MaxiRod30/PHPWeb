<link rel="stylesheet" href="Estilos/styleProducto.css" />
<div class="boxRegistro">
    <h1>Ingreso de Producto</h1>
        <form id="dataFRM_PRODUCTO" action="Administrador/Producto/ProcesoIngresarProducto.php"enctype="multipart/form-data" method="POST" class="formulario">
            <hr>
            <label id="icon" for="name"><i class="icon-user"></i></label>
            <input type="text" name="nameProductoNOM" id="idProductoNOM" placeholder="Ingrese nombre del Producto" required/>
            
            <label id="icon" for="name"><i class="icon-user"></i></label>
            <input type="text" name="nameProductoDESCR" id="idProductoDESCR" placeholder="Ingrese la descripcion del Producto" required/>
            
            <label id="icon" for="name"><i class="icon-user"></i></label>
            <input type="text" name="nameProductoPRECIO" id="idProductoPRECIO" placeholder="Ingrese Precio del Producto" required/>
            
            <label id="icon" for="name"><i class="icon-user"></i></label>
            <select id="idCategoria" name="nameCategoria">
              <option value="0">-- Seleccione Categoria. --</option>
              <?php
                // crear opciones
                include "CargarComboCategorias.php";
              ?>                          
            </select>

            <label id="icon" for="name"><i class="icon-user"></i></label>
            <select id="idMarca" name="nameMarca">
              <option value="0">-- Seleccione Marcas. --</option>
              <?php
                // crear opciones
                include "CargarComboMarcas.php";
              ?>                          
            </select>

            <label id="icon" for="name"><i class="icon-user"></i></label>
            <select id="idOrigen" name="nameOrigen">
              <option value="">-- Seleccione Origen. --</option>
              <option value="China">China</option>
              <option value="UK">UK</option>
              <option value="USA">USA</option>         
            </select>
            
            <label id="icon" for="name"><i class="icon-user"></i></label>
            <select id="idEstado" name="nameEstado">
              <option value="">-- Seleccione --</option>
              <option value="Activo">Activo</option>
              <option value="De baja">De Baja</option>     
            </select>

            <br/>
            <br/>
            <label >Foto del Producto:</label>
            <input type="file" id="idfile" name="nameFotoProducto" />

            <hr>
            <a href="#" class="button" onclick="CheckPRODUCTO()">Guardar</a>
        </form>

</div>

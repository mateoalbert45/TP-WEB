{include file="navbar.tpl"}
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-md-offset-3">
          <h3>Filtrar segun marca</h3>
            <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Marca</th>
              </tr>
            </thead>
            <td><p>0</p></td>
            <td><p>todos</p></td>
              <td><a href="TablaPHP">Eliminar filtro</a></td>
            {foreach from=$marcas item=marca}
            <tbody>
              <tr>
                <td>{$marca['id_marca']}</td>
                <td>{$marca['nombre']}</td>
                <td><a href="FiltrarProducto/{$marca['id_marca']}">Seleccionar filtro</a></td>

              </tr>
            </tbody>
            {/foreach}
          </table>

      <h1>Lista de Productos</h1>

          <table class="table">
          <thead>
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">Talle</th>
              <th scope="col">Stock</th>
            </tr>
          </thead>
          {foreach from=$productos item=producto}
          <tbody>
            <tr>
              <td>{$producto['nombre']}</td>
              <td>{$producto['talle']}</td>
              <td>{$producto['stock']}</td>
            <td><a href="MostrarProducto/{$producto['id_producto']}"> Mas Info</a></td>
{if $admin eq "true"}
            <td><a href="BorrarProducto/{$producto['id_producto']}">Borrar</a></td>
            <td><a href="EditarProducto/{$producto['id_producto']}">Editar</a></td>
{/if}
            </tr>
          </tbody>
          {/foreach}
        </table>


{if $admin eq "true"}
          <form method="post" action="AgregarProducto" enctype="multipart/form-data">
            <div class="form-group">
              <label for="nombreform">Nombre</label>
              <input type="text" class="form-control" id="nombreform" name="nombreform" placeholder="Nombre del producto">
            </div>
            <div class="form-group">
              <label for="talleform">Talle</label>
              <input type="text" class="form-control" id="talleform" name="talleform" placeholder="Talle">
            </div>
            <div class="form-group">
              <label for="stockform">Stock</label>
              <input type="text" class="form-control" id="stockform" name="stockform" placeholder="Stock">
            </div>
            <div  class="form-group">
              <label for="exampleFormControlSelect1">Marca del Producto</label>
              <select class="form-control" id="marcaform" name="marcaform">
                {foreach from=$marcas item=marca}
                <option>{$marca['id_marca']} : {$marca['nombre']}</option>
                {/foreach}
              </select>
            </div>
            <div class="form-group">
              <label for="imagen">Imagen</label>
              <input type="file" id="imagenes" name="imagenes[]" multiple>
            </div>
            <button type="submit" class="btn btn-default">Crear Producto</button>
          </form>
{/if}
        </div>

         <div class="col-md-5 col-md-offset-3">
           <h1>Lista de Marcas</h1>
           <table class="table">
           <thead>
             <tr>
               <th scope="col">ID</th>
               <th scope="col">Nombre</th>
               <th scope="col">Descripcion</th>
             </tr>
           </thead>
           {foreach from=$marcas item=marca}
           <tbody>
             <tr>
               <td>{$marca['id_marca']}</td>
               <td>{$marca['nombre']}</td>
               <td>{$marca['descripcion']}</td>

{if $admin eq "true"}
             <td><a href="BorrarMarca/{$marca['id_marca']}">Borrar</a></td>
             <td><a href="EditarMarca/{$marca['id_marca']}">Editar</a></td>
{/if}
             </tr>
           </tbody>
           {/foreach}
         </table>

{if $admin eq "true"}
           <form method="post" action="AgregarMarca"  enctype="multipart/form-data">
             <div class="form-group">
               <label for="nombreform">Nombre</label>
               <input type="text" class="form-control" id="nombreform" name="nombreform" placeholder="Nombre de la marca">
             </div>
             <div class="form-group">
               <label for="descripcionform">Descripcion</label>
               <textarea  id="descripcionform" name="descripcionform" rows="8" cols="50"></textarea>
             </div>
             <button type="submit" class="btn btn-default">Crear Marca</button>
           </form>
{/if}
         </div>
        </div>
           </div><!-- /.container -->
  </body>
</html>
{include file="footer.tpl"}

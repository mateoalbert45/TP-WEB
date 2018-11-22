{include file="navbar.tpl"}
    <div class="container">
          <h1>Informacion Extendida del Producto</h1>

  <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Talle</th>
      <th scope="col">Stock</th>
      <th scope="col">Marca</th>
        {foreach from=$imagenes item=imagen}
      <th scope="col">Imagen</th>
      {/foreach}
    </tr>
  </thead>
  <tbody>
    <tr>
      <th  scope="row">{$producto['id_producto']}</th>
      <td>{$producto['nombre']}</td>
      <td>{$producto['talle']}</td>
      <td>{$producto['stock']}</td>
      <td>{$nombremarca['nombre']}</td>
      {foreach from=$imagenes item=imagen}
      <td> <img src="{$imagen['ruta']}" alt="" class="img"></td>
      {/foreach}
    </tr>
  </tbody>
</table>



<h2>Crear Comentario</h2>
<form id="CrearComentario">
  <div class="form-group">
    <label for="nombreform">Texto</label>
    <input type="text" class="form-control" id="texto" name="nombreform" placeholder="">
  </div>
  <div class="form-group">
    <label for="talleform">Calificacion</label>
    <select  id="calificacion" class="" name="">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
  </div>

  <button id="insertarComentario" value="{$producto['id_producto']}" class="btn btn-default">Crear Comentario</button>
</form>

{if $admin eq "true"}
<input type="text" name="" id="admin" value=true hidden="hidden">
{else}
<input type="text" name="" id="admin" value=false hidden="hidden">
{/if}

<input type="text" name="" id="idProducto" value="{$producto['id_producto']}" hidden="hidden">
<div id="comentarios-container" class="comentarios-container">

</div>


           </div><!-- /.container -->
  </body>
</html>
{include file="footer.tpl"}

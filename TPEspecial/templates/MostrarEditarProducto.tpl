{include file="navbar.tpl"}

    <div class="container">
      <h2>Formulario</h2>
      <form method="post" action="{$home}/GuardarEditarProducto">
        <input type="hidden" class="form-control" id="idform" name="idform" value="{$producto['id_producto']}">
        <div class="form-group">
          <label for="nombreform">Nombre</label>
          <input type="text" class="form-control" id="nombreform" name="nombreform" value="{$producto['nombre']}">
        </div>
        <div class="form-group">
          <label for="talleform">Talle</label>
          <input type="text" class="form-control" id="talleform" name="talleform" value="{$producto['talle']}">
        </div>
        <div class="form-group">
          <label for="stockform">Stock</label>
          <input type="text" class="form-control" id="stockform" name="stockform" value="{$producto['stock']}">
        </div>
        <select id="marcaform" name="marcaform">
          {foreach from=$marcas item=marca}
          <option> {$marca['id_marca']} : {$marca['nombre']}</option>
          {/foreach}
        </select>
        <button type="submit" class="btn btn-primary">Editar Producto</button>
      </form>
    </div>
    {include file="footer.tpl"}

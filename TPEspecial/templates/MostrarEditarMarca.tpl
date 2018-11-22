{include file="navbar.tpl"}

    <div class="container">
      <h2>Formulario</h2>
      <form method="post" action="{$home}/GuardarEditarMarca">
        <input type="hidden" class="form-control" id="idform" name="idform" value="{$Marca['id_marca']}">
        <div class="form-group">
          <label for="nombreform">Nombre</label>
          <input type="text" class="form-control" id="nombreform" name="nombreform" value="{$Marca['nombre']}">
        </div>
        <div class="form-group">
          <label for="descripcionform">Descripcion</label>
          <input type="text" class="form-control" id="descripcionform" name="descripcionform" value="{$Marca['descripcion']}">
        </div>
        <button type="submit" class="btn btn-primary">Editar Marca</button>
      </form>
    </div>
    {include file="footer.tpl"}

{include file="navbar.tpl"}

    <div class="container">
      <a href="TablaPHPAdmin">Ingresar a tabla Admin</a>
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
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
              <th scope="col">Stock</th>
            </tr>
          </thead>
          {foreach from=$productos item=producto}
          <tbody>
            <tr>
              <td>{$producto['nombre']}</td>
              <td>{$producto['stock']}</td>
            <td><a href="MostrarProducto/{$producto['id_producto']}"> Mas Info</a></td>
            </tr>
          </tbody>
          {/foreach}
        </table>
        </div>





         <div class="col-md-6 col-md-offset-3">

             <h1>Lista de Marcas</h1>
             <table class="table">
             <thead>
               <tr>
                 <th scope="col">Nombre</th>
                 <th scope="col">Descripcion</th>
               </tr>
             </thead>
             {foreach from=$marcas item=marca}
             <tbody>
               <tr>
                 <td>{$marca['nombre']}</td>
                 <td>{$marca['descripcion']}</td>
               </tr>
             </tbody>
             {/foreach}
           </table>

           </div>

         </div>





        </div>
           </div><!-- /.container -->
  </body>
</html>
{include file="footer.tpl"}

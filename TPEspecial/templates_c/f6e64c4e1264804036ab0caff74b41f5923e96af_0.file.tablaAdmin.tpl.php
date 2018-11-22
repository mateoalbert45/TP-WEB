<?php
/* Smarty version 3.1.33, created on 2018-11-22 22:50:47
  from 'C:\xampp\htdocs\proyectos\TPEspecial\templates\tablaAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf724b700f563_49405114',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6e64c4e1264804036ab0caff74b41f5923e96af' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPEspecial\\templates\\tablaAdmin.tpl',
      1 => 1542923297,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bf724b700f563_49405114 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'marca');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
?>
            <tbody>
              <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['marca']->value['id_marca'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['marca']->value['nombre'];?>
</td>
                <td><a href="FiltrarProducto/<?php echo $_smarty_tpl->tpl_vars['marca']->value['id_marca'];?>
">Seleccionar filtro</a></td>

              </tr>
            </tbody>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
          <tbody>
            <tr>
              <td><?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['producto']->value['talle'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['producto']->value['stock'];?>
</td>
            <td><a href="MostrarProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
"> Mas Info</a></td>
<?php if ($_smarty_tpl->tpl_vars['admin']->value == "true") {?>
            <td><a href="BorrarProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
">Borrar</a></td>
            <td><a href="EditarProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
">Editar</a></td>
<?php }?>
            </tr>
          </tbody>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>


<?php if ($_smarty_tpl->tpl_vars['admin']->value == "true") {?>
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
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'marca');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
?>
                <option><?php echo $_smarty_tpl->tpl_vars['marca']->value['id_marca'];?>
 : <?php echo $_smarty_tpl->tpl_vars['marca']->value['nombre'];?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </select>
            </div>
            <div class="form-group">
              <label for="imagen">Imagen</label>
              <input type="file" id="imagenes" name="imagenes[]" multiple>
            </div>
            <button type="submit" class="btn btn-default">Crear Producto</button>
          </form>
<?php }?>
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
           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'marca');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
?>
           <tbody>
             <tr>
               <td><?php echo $_smarty_tpl->tpl_vars['marca']->value['id_marca'];?>
</td>
               <td><?php echo $_smarty_tpl->tpl_vars['marca']->value['nombre'];?>
</td>
               <td><?php echo $_smarty_tpl->tpl_vars['marca']->value['descripcion'];?>
</td>

<?php if ($_smarty_tpl->tpl_vars['admin']->value == "true") {?>
             <td><a href="BorrarMarca/<?php echo $_smarty_tpl->tpl_vars['marca']->value['id_marca'];?>
">Borrar</a></td>
             <td><a href="EditarMarca/<?php echo $_smarty_tpl->tpl_vars['marca']->value['id_marca'];?>
">Editar</a></td>
<?php }?>
             </tr>
           </tbody>
           <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
         </table>

<?php if ($_smarty_tpl->tpl_vars['admin']->value == "true") {?>
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
<?php }?>
         </div>
        </div>
           </div><!-- /.container -->
  </body>
</html>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

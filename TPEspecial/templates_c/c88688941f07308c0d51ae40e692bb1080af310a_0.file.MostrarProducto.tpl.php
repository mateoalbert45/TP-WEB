<?php
/* Smarty version 3.1.33, created on 2018-11-22 22:56:34
  from 'C:\xampp\htdocs\proyectos\TPEspecial\templates\MostrarProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf72612e6eb68_47985858',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c88688941f07308c0d51ae40e692bb1080af310a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPEspecial\\templates\\MostrarProducto.tpl',
      1 => 1542923793,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bf72612e6eb68_47985858 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['imagenes']->value, 'imagen');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->value) {
?>
      <th scope="col">Imagen</th>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th  scope="row"><?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
</th>
      <td><?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['producto']->value['talle'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['producto']->value['stock'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['nombremarca']->value['nombre'];?>
</td>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['imagenes']->value, 'imagen');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->value) {
?>
      <td> <img src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['ruta'];?>
" alt="" class="img"></td>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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

  <button id="insertarComentario" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
" class="btn btn-default">Crear Comentario</button>
</form>

<?php if ($_smarty_tpl->tpl_vars['admin']->value == "true") {?>
<input type="text" name="" id="admin" value=true hidden="hidden">
<?php } else { ?>
<input type="text" name="" id="admin" value=false hidden="hidden">
<?php }?>

<input type="text" name="" id="idProducto" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
" hidden="hidden">
<div id="comentarios-container" class="comentarios-container">

</div>


           </div><!-- /.container -->
  </body>
</html>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

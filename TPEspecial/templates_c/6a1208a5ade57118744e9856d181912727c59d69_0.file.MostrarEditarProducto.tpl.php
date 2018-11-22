<?php
/* Smarty version 3.1.33, created on 2018-11-19 21:30:26
  from 'C:\xampp\htdocs\proyectos\TPEspecial\templates\MostrarEditarProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf31d6229afb2_39088305',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a1208a5ade57118744e9856d181912727c59d69' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPEspecial\\templates\\MostrarEditarProducto.tpl',
      1 => 1539818368,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bf31d6229afb2_39088305 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="container">
      <h2>Formulario</h2>
      <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/GuardarEditarProducto">
        <input type="hidden" class="form-control" id="idform" name="idform" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
">
        <div class="form-group">
          <label for="nombreform">Nombre</label>
          <input type="text" class="form-control" id="nombreform" name="nombreform" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
">
        </div>
        <div class="form-group">
          <label for="talleform">Talle</label>
          <input type="text" class="form-control" id="talleform" name="talleform" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value['talle'];?>
">
        </div>
        <div class="form-group">
          <label for="stockform">Stock</label>
          <input type="text" class="form-control" id="stockform" name="stockform" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value['stock'];?>
">
        </div>
        <select id="marcaform" name="marcaform">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'marca');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
?>
          <option> <?php echo $_smarty_tpl->tpl_vars['marca']->value['id_marca'];?>
 : <?php echo $_smarty_tpl->tpl_vars['marca']->value['nombre'];?>
</option>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <button type="submit" class="btn btn-primary">Editar Producto</button>
      </form>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

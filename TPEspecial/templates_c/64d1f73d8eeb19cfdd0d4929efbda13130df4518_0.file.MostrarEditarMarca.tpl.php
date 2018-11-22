<?php
/* Smarty version 3.1.33, created on 2018-11-21 20:02:55
  from 'C:\xampp\htdocs\proyectos\TPEspecial\templates\MostrarEditarMarca.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf5abdf5f46a2_77435393',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64d1f73d8eeb19cfdd0d4929efbda13130df4518' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPEspecial\\templates\\MostrarEditarMarca.tpl',
      1 => 1539818373,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bf5abdf5f46a2_77435393 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="container">
      <h2>Formulario</h2>
      <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/GuardarEditarMarca">
        <input type="hidden" class="form-control" id="idform" name="idform" value="<?php echo $_smarty_tpl->tpl_vars['Marca']->value['id_marca'];?>
">
        <div class="form-group">
          <label for="nombreform">Nombre</label>
          <input type="text" class="form-control" id="nombreform" name="nombreform" value="<?php echo $_smarty_tpl->tpl_vars['Marca']->value['nombre'];?>
">
        </div>
        <div class="form-group">
          <label for="descripcionform">Descripcion</label>
          <input type="text" class="form-control" id="descripcionform" name="descripcionform" value="<?php echo $_smarty_tpl->tpl_vars['Marca']->value['descripcion'];?>
">
        </div>
        <button type="submit" class="btn btn-primary">Editar Marca</button>
      </form>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

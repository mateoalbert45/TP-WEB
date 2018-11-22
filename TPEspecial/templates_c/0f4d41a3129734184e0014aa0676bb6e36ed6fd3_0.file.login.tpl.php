<?php
/* Smarty version 3.1.33, created on 2018-11-20 22:07:28
  from 'C:\xampp\htdocs\proyectos\TPEspecial\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf47790e1bc95_91486411',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f4d41a3129734184e0014aa0676bb6e36ed6fd3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPEspecial\\templates\\login.tpl',
      1 => 1539817045,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bf47790e1bc95_91486411 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <div class="row">
  <div class="col-md-6 col-md-offset-3">
    <h1>Iniciar Sesion</h1>
<form method="post" action="VerificarLogin">
<div class="form-group">
  <label for="exampleInputEmail1">Usuario</label>
  <input type="text" class="form-control" id="usuarioId" name="usuarioId" aria-describedby="usuarioId" placeholder="Enter email">
</div>
<div class="form-group">
  <label for="exampleInputPassword1">Password</label>
  <input type="password" class="form-control" id="passwordId" name="passwordId" placeholder="Password">
</div>
<button type="submit" class="btn btn-primary">Iniciar</button>
</form>
  <?php echo $_smarty_tpl->tpl_vars['Message']->value;?>

</div>
  <div class="col-md-6 col-md-offset-3">
<h1>Crear Cuenta</h1>
<form method="post" action="CrearCuenta">
<div class="form-group">
  <label for="exampleInputEmail1">Usuario</label>
  <input type="text" class="form-control" id="nombreNew" name="nombreNew" aria-describedby="usuarioId" placeholder="Enter email">
</div>
<div class="form-group">
  <label for="exampleInputPassword1">Password</label>
  <input type="password" class="form-control" id="passNew" name="passNew" placeholder="Password">
</div>
<button type="submit" class="btn btn-primary">Crear</button>
</form>
</div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

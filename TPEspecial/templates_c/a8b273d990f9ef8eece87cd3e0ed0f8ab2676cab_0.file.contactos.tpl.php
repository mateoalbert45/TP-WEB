<?php
/* Smarty version 3.1.33, created on 2018-11-21 19:13:57
  from 'C:\xampp\htdocs\proyectos\TPEspecial\templates\contactos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf5a065afb072_14938034',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8b273d990f9ef8eece87cd3e0ed0f8ab2676cab' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPEspecial\\templates\\contactos.tpl',
      1 => 1539801186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bf5a065afb072_14938034 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="jumbotron">
      <div class="container">
      <h1>Contactate con nosotros!</h1>
      </div>
      </div>
      <div class="bordevioleta">
        <div class="centrado">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2>Ingresa tu datos</h2>
    <form>
      <p>Nombre <input type="text" name="nombre"></p>
      <p>Apellido <input type="text" name="apellido"></p>
      <p>Telefono <input type="number" name="telefono"></p>
      <p>Direccion <input type="text" name="direccion" ></p>
      <p>E-mail<input type="text" name="email"></p>
      <p>Mensaje <textarea cols="50" rows="10" name="mensaje"></textarea></p>
      <p><input type="submit" name="" value="Enviar Datos"></p>
    </form>
  </div>
    </div>
      </div>
      </div>
      </div>
      <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

<?php
/* Smarty version 3.1.33, created on 2018-11-20 23:53:43
  from 'C:\xampp\htdocs\proyectos\TPEspecial\templates\tabladestock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf49077babf14_57066779',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c656fe647265c5d92e6d28ecb100a0814f67701' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPEspecial\\templates\\tabladestock.tpl',
      1 => 1539801215,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bf49077babf14_57066779 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <div class="container">
    <div class="bordevioleta">
      <form>
        <p>Nombre del producto<input type="text" class="js-nombreproducto" name="Nombre del producto" value=""></p>
        <p>Marca <input type="text" class="js-marca" name="Marca" value=""></p>
        <p>Modelo <input type="text" class="js-modelo" name="Modelo" value=""></p>
        <p>Talle <input type="text" class="js-talle" name="Talle" value="" ></p>
        <p>Cantidad<input type="text" class="js-cantidad" name="Cantidad" value=""></p>
      </form>
    </div>
    <div class="filtrar bordevioleta">
      <p>Filtrar por nombre<input type="text" class="js-filtro" name="filtro" value=""></p>
      <button type="button" class="botonfiltro" name="button">Filtrar</button>
      </div>
      <div class="bordevioleta">
        <button type="button" class="botoncreartabla" name="button">Crear</button>
        <button type="button" class="botoncreartrestabla" name="button">Crear 3</button>
      </div>

    <div id="use-ajax-tablastock">

    </div>
    <div id="lugareditar">

    </div>
  </div>
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

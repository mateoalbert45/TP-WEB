<?php
/* Smarty version 3.1.33, created on 2018-11-19 20:33:34
  from 'C:\xampp\htdocs\proyectos\TPEspecial\templates\formaspago.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf3100e794564_58189767',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8c9757e17c5fbbdeb2d5b396e580bda8387eaaf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPEspecial\\templates\\formaspago.tpl',
      1 => 1539801191,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bf3100e794564_58189767 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="jumbotron">



    <div class="container">
      <!-- Example row of columns -->
      <div class="row ">
        <div class="col-md-6">
          <h2>Formas de Pago</h2>
          <img src="img/mastercard.jpg" width="20%">
          <img src="img/visa.jpg" width="20%">
          <img src="img/cabal.jpg" width="20%">
          <img src="img/cabaldebito.jpg" width="20%" >
          <img src="img/visadebito.jpg" width="20%" >


        </div>
        <div class="col-md-6">
          <h2>Formas de Envio</h2>
          <p>Por medio de CorreoArgentino</p>
          <img src="img/correoargentino.jpg" width="50%">

          </div>

        </div>
        </div>
        </div>
        <!-- Example row of columns -->
        <div class="container centrado">
        <div class="row">
        <div class="col-md-12">


          <div class="bordevioleta borderadio">
          <h2>Ingresa tu datos</h2>
          <form>
            <p>Codigo postal <input type="text" name="  Codigo postal"></p>
            <p>Provincia <input type="text" name="Provincia"></p>
            <p>Localidad <input type="text" name="localidad"></p>
            <p>Calle <input type="text" name="Calle" ></p>
            <p>Numero de calle<input type="text" name="Numero de calle"></p>
            <p>Nombre<input type="text" name="Nombre"></p>
            <p>Telefono<input type="text" name="Telefono"></p>
            <input type="submit" name="" value="Enviar Datos"></p>
          </form>
        </div>
        </div>
        <div class="col-md-12">
          <div class="bordevioleta borderadio">
      <div class="direccion" >
        <h3>Tambien podes retirarlo en el local!!</h3>
        <a href="img/direccionbuena.jpg"><img src="img/direccion.jpg" width="92%"></a>
      </div>
      </div>
    </div>
    </div>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

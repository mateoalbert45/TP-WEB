<?php
/* Smarty version 3.1.33, created on 2018-11-19 20:30:27
  from 'C:\xampp\htdocs\proyectos\TPEspecial\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf30f53a41461_00919910',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '570f176a46ddf9a1ae5a470b525d200ebf0ebb28' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPEspecial\\templates\\home.tpl',
      1 => 1542655826,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bf30f53a41461_00919910 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">Bienvenido a Netshoes</h1>
          <p>Acontinuacion podras ver una gran variedad de los principales articulos que tenemos en stock ahora mismo.</p>
        </div>
        <div class="imagennet">

        </div>
      </div>
      <div id="comentarios-container"class="">

      </div>

      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-12">
            <h2> Botines Nike Tiempo</h2>
            <img src="nike1.jpg" alt="">

            <p><a class="btn btn-secondary js-comportamiento" href="#" role="button">Ver mas &raquo;</a></p>
            <img src="img/nike1.jpg" width="20%">
            <img src="img/nike2.jpg" width="20%">
            <img src="img/nike3.jpg" width="20%">
            <img src="img/nike4.jpg" width="20%">
            <p>La calidad en la pegada que proporcinan los Botines Nike Tiempo Legend 7 Academy TF no serán igualados por ningún otro botín. Además de tracción y un diseño moderno, dale estilo a tu juego.</p>

          </div>
          <div class="col-md-12">
            <h2>Campera Nike Dry Element</h2>
              <p><a class="btn btn-secondary" href="#" role="button">Ver mas &raquo;</a></p>
            <img src="img/campera.jpg" width="20%">
            <img src="img/camperaatras.jpg" width="20%">
            <p>Los días frescos no serán un impedimento sino una oportunidad de lucir el Buzo Nike Dry Element. Detalles reflectivos que te brindan seguridad y un estilo moderno con excelente ajuste a tu cuerpo.</p>

          </div>
          <div class="col-md-12">
            <h2>Guantes Puma Training Up</h2>
            <p><a class="btn btn-secondary" href="#" role="button">Ver mas &raquo;</a></p>
            <img src="img/guantes.jpg" width="20%">
            <img src="img/guantesatras.jpg" width="20%">
            <p>Para quienes entrenan a diario y de forma exigente, los Guantes Puma Training Up son un accesorio fundamental. Ideal para el gimnasio, es un modelo suave y acolchado que brinda gran protección.</p>
          </div>
        </div>

        <hr>

      </div>

    </main>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

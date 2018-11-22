<?php
/* Smarty version 3.1.33, created on 2018-11-21 19:55:08
  from 'C:\xampp\htdocs\proyectos\TPEspecial\templates\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf5aa0c2d1530_28116366',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e1df59d1264fa4bd8e625004231160ce734cc7c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPEspecial\\templates\\navbar.tpl',
      1 => 1542826507,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5bf5aa0c2d1530_28116366 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <body>
    <div class="encabezado">
    <img src="img/netshoes.jpg" width="20%">
    <p><a class="sesion" href="Login">Iniciar sesión / Crear Cuenta</p>
    </div>

    <nav class="navbar navbar-expand-md navbar-dark ">
      <a class="navbar-brand botoninicio" href="Home">Inicio</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>


      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="FormasDePagoYEnvio">Formas de pago y envio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link botontablatalles" href="TablaDeTalles">Tabla de talles</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link botoncontactos" href="Contactos">Contactos</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link " href="TablaPHP">Tabla PHP</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link " href="Logout">Cerrar Sesion</a>
          </li>
        </ul>
      </div>
    </nav>

    <div id="use-ajax">

    </div>
<?php }
}

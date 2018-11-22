<?php
/* Smarty version 3.1.33, created on 2018-11-21 20:20:18
  from 'C:\xampp\htdocs\proyectos\TPEspecial\templates\tabla.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf5aff29240e1_70190122',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89989c25a248b2453a5bec54867840b8c656cb9e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPEspecial\\templates\\tabla.tpl',
      1 => 1542828017,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bf5aff29240e1_70190122 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="container">
      <a href="TablaPHPAdmin">Ingresar a tabla Admin</a>
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
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
              <td><?php echo $_smarty_tpl->tpl_vars['producto']->value['stock'];?>
</td>
            <td><a href="MostrarProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
"> Mas Info</a></td>
            </tr>
          </tbody>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
        </div>





         <div class="col-md-6 col-md-offset-3">

             <h1>Lista de Marcas</h1>
             <table class="table">
             <thead>
               <tr>
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
                 <td><?php echo $_smarty_tpl->tpl_vars['marca']->value['nombre'];?>
</td>
                 <td><?php echo $_smarty_tpl->tpl_vars['marca']->value['descripcion'];?>
</td>
               </tr>
             </tbody>
             <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
           </table>

           </div>

         </div>





        </div>
           </div><!-- /.container -->
  </body>
</html>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

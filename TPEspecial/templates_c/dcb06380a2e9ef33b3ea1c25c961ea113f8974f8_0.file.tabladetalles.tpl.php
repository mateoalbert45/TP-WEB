<?php
/* Smarty version 3.1.33, created on 2018-11-19 20:34:01
  from 'C:\xampp\htdocs\proyectos\TPEspecial\templates\tabladetalles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf310291e0203_98233448',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dcb06380a2e9ef33b3ea1c25c961ea113f8974f8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPEspecial\\templates\\tabladetalles.tpl',
      1 => 1539801220,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bf310291e0203_98233448 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="jumbotron">
      <div class="container">
      <h1>Los talles disponibles son:</h1>
      </div>
      </div>


    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h3>Nike</h3>
          <table class="talles">
            <thead>
              <tr>
                <th>Talle Argentino</th>
                <th>US</th>
                <th>EUR</th>
                <th>UK</th>
              </tr>
            </thead>
            <tr>
              <td>37,5</td>
              <td>6</td>
              <td>38,5</td>
              <td>5,5</td>
            </tr>
            <tr>
              <td>38</td>
              <td>6,5</td>
              <td>39</td>
              <td>6</td>
            </tr>
            <tr>
              <td>39</td>
              <td>7</td>
              <td>40</td>
              <td>6,5</td>
            </tr>
            <tr>
              <td>39,5</td>
              <td>7,5</td>
              <td>40,5</td>
              <td>7</td>
            </tr>
            <tr>
              <td>40</td>
              <td>8</td>
              <td>41</td>
              <td>7,5</td>
            </tr>
            <tr>
              <td>41</td>
              <td>8,5</td>
              <td>42</td>
              <td>8</td>
            </tr>
            <tr>
              <td>41,5</td>
              <td>9</td>
              <td>42,5</td>
              <td>8,5</td>
            </tr>
            <tr>
              <td>42</td>
              <td>9,5</td>
              <td>43</td>
              <td>9</td>
            </tr>
              </div>

          </table>
        </div>
        <div class="col-md-6">
          <h3>Adidas</h3>
          <div class="col-md-4">
          <table class="talles">
            <thead>
              <tr>
                <th>Talle Argentino</th>
                <th>US</th>
                <th>UK</th>
              </tr>
            </thead>
            <tr>
              <td>37,5</td>
              <td>6,5</td>
              <td>6</td>
            </tr>
            <tr>
              <td>38</td>
              <td>7</td>
              <td>6,5</td>
            </tr>
            <tr>
              <td>39</td>
              <td>7,5</td>
              <td>7</td>
            </tr>
            <tr>
              <td>39,5</td>
              <td>8</td>
              <td>7,5</td>
            </tr>
            <tr>
              <td>40</td>
              <td>8,5</td>
              <td>8</td>
            </tr>
            <tr>
              <td>41</td>
              <td>9</td>
              <td>8,5</td>
            </tr>
            <tr>
              <td>41,5</td>
              <td>9,5</td>
              <td>9</td>
            </tr>
            <tr>
              <td>42</td>
              <td>10</td>
              <td>9,5</td>
            </tr>
          </table>
          </div>
            </div>
              </div>
              <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

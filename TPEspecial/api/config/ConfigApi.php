<?php

define('HOME', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
define('LOGIN', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/Login');
define('LOGOUT', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/Logout');
define('TABLA', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/TablaPHP');
define('TABLAADMIN', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/TablaPHPAdmin');
define('MOSTRARPRODUCTO', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/MostrarProducto');

class ConfigApi
{
    public static $RESOURCE = 'resource';
    public static $PARAMS = 'params';
    public static $RESOURCES = [
      'marca#GET'=> 'MarcasApiController#GetMarcas',
      'producto#GET'=> 'ProductosApiController#GetProductos',
      'marca#DELETE'=> 'MarcasApiController#BorrarMarca',
      'producto#DELETE'=> 'ProductosApiController#BorrarProducto',
      'marca#POST'=> 'MarcasApiController#InsertarMarca',
      'producto#POST'=> 'ProductosApiController#InsertarProducto',
      'marca#PUT'=> 'MarcasApiController#EditarMarca',
      'producto#PUT'=> 'ProductosApiController#EditarProducto',
      'comentario#GET'=> 'ComentariosApiController#GetComentarios',
      'comentario#POST'=> 'ComentariosApiController#InsertarComentarios',
      'comentario#DELETE'=> 'ComentariosApiController#BorrarComentarios'
    ];

}

 ?>

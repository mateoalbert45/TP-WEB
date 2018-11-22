<?php

define('HOME', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
define('LOGIN', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/Login');
define('LOGOUT', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/Logout');
define('TABLA', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/TablaPHP');
define('TABLAADMIN', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/TablaPHPAdmin');
define('MOSTRARPRODUCTO', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/MostrarProducto');

class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      ''=> 'HomeController#Home',
      'Home'=> 'HomeController#Home',
      'BorrarMarca'=> 'MarcaController#BorrarMarca',
      'BorrarProducto'=> 'ProductoController#BorrarProducto',
      'AgregarMarca'=> 'MarcaController#InsertarMarca',
      'AgregarProducto'=> 'ProductoController#InsertarProducto',
      'EditarMarca'=> 'MarcaController#EditarMarca',
      'GuardarEditarMarca'=> 'MarcaController#GuardarEditarMarca',
      'EditarProducto'=> 'ProductoController#EditarProducto',
      'GuardarEditarProducto'=> 'ProductoController#GuardarEditarProducto',
      'MostrarUsuarios'=> 'UsuarioController#MostrarUsuario',
      'Login'=> 'LoginController#login',
      'VerificarLogin' => 'LoginController#verificarLogin',
      'Logout'=> 'LoginController#logout',
      'TablaPHP'=> 'TiendaController#MostrarTabla',
      'FormasDePagoYEnvio'=> 'FormasPagoController#FormasPago',
      'TablaDeTalles'=> 'TabladeTallesController#TabladeTalles',
      'Contactos'=> 'ContactosController#Contactos',
      'CrearCuenta'=> 'LoginController#verificarCrearCuenta',
      'MostrarProducto'=> 'ProductoController#MostrarProducto',
      'FiltrarProducto'=> 'ProductoController#FiltrarProducto'

    ];

}

 ?>

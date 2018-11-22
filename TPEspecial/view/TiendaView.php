<?php

require('libs/Smarty.class.php');

class TiendaView
{
  function __construct()
{
  $this->Smarty = new Smarty();
}


  //function MostrarTablaPHP($marcas, $productos){
    //$this->Smarty->assign('marcas',$marcas);
  //  $this->Smarty->assign('productos',$productos);
    //$this->Smarty->display('templates/tabla.tpl');
   //}

   function MostrarTablaAdmin($marcas,$productos,$admin){
     $this->Smarty->assign('marcas',$marcas);
     $this->Smarty->assign('productos',$productos);
     $this->Smarty->assign('admin',$admin);
     $this->Smarty->display('templates/tablaAdmin.tpl');
    }

  function MostrarEditarMarca($Marca){
  $this->Smarty->assign('Marca',$Marca);
  //$smarty->debugging = true;
  $this->Smarty->assign('home',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  $this->Smarty->display('templates/MostrarEditarMarca.tpl');

}

function MostrarEditarProducto($producto, $marcas){
$this->Smarty->assign('producto',$producto);
$this->Smarty->assign('marcas',$marcas);
//$smarty->debugging = true;
$this->Smarty->assign('home',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
$this->Smarty->display('templates/MostrarEditarProducto.tpl');

}


function MostrarProducto($producto,$nombremarca,$imagenes, $admin){
    $this->Smarty->assign('producto',$producto);
    $this->Smarty->assign('nombremarca',$nombremarca);
    $this->Smarty->assign('imagenes',$imagenes);
    $this->Smarty->assign('admin',$admin);
    $this->Smarty->display('templates/MostrarProducto.tpl');
   }


}
 ?>

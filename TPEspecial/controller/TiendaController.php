<?php

require_once "./view/TiendaView.php";
require_once "./model/TiendaModel.php";
require_once "SecuredController.php";



class TiendaController extends SecuredController
{
  private $view;
  private $model;


  function __construct()
  {
    parent::__construct();


    $this->view = new TiendaView();
    $this->model = new TiendaModel();
  }

function MostrarTabla(){
  if($_SESSION['admin'] == 1){
    $admin = true;
    $this->MostrarTablaAdmin($admin);
  }else {
    $admin = false;
    $this->MostrarTablaAdmin($admin);
  }

}


function MostrarTablaAdmin($admin){
  $productos = $this->model->getProductos();
  $marcas = $this->model->getMarcas();
  $this->view->MostrarTablaAdmin($marcas, $productos, $admin);
}

}

 ?>

<?php

require_once "./view/TiendaView.php";
require_once "./model/TiendaModel.php";
require_once "SecuredController.php";



class MarcaController extends SecuredController
{
  private $view;
  private $model;


  function __construct()
  {
    parent::__construct();


    $this->view = new TiendaView();
    $this->model = new TiendaModel();
  }

function InsertarMarca(){
    if($_SESSION['admin'] == 1){
  $nombre = $_POST["nombreform"];
  $descripcion = $_POST["descripcionform"];
  $this->model->InsertarMarca($nombre,$descripcion);
  header(TABLA);
}
}


function BorrarMarca($param){
    if($_SESSION['admin'] == 1){
  $this->model->BorrarMarca($param[0]);
  header(TABLA);
}
}

function EditarMarca($param){
    if($_SESSION['admin'] == 1){
    $id_marca = $param[0];
    $Marca = $this->model->getMarca($id_marca);
    $this->view->MostrarEditarMarca($Marca[0]);
  }
}



function GuardarEditarMarca(){
    if($_SESSION['admin'] == 1){
  $id_marca = $_POST["idform"];
  $nombre = $_POST["nombreform"];
  $descripcion = $_POST["descripcionform"];
  $this->model->GuardarEditarMarca($nombre,$descripcion,$id_marca);
  header(TABLA);
}  //header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
}

}

 ?>

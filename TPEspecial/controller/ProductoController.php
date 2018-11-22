<?php

require_once "./view/TiendaView.php";
require_once "./model/TiendaModel.php";
require_once "SecuredController.php";



class ProductoController extends SecuredController
{
  private $view;
  private $model;


  function __construct()
  {
    parent::__construct();


    $this->view = new TiendaView();
    $this->model = new TiendaModel();
  }


function InsertarProducto(){
    if($_SESSION['admin'] == 1){
  $nombre = $_POST["nombreform"];
  $talle = $_POST["talleform"];
  $stock = $_POST["stockform"];
  $marca = $_POST["marcaform"];
  $rutaTempImagenes = $_FILES['imagenes']['tmp_name'];
  $this->model->InsertarProducto($nombre,$talle,$stock,$marca,$rutaTempImagenes);
  header(TABLA);
}
}

function BorrarProducto($param){
    if($_SESSION['admin'] == 1){
  $this->model->BorrarProducto($param[0]);
  header(TABLA);
}
}




function EditarProducto($param){
    if($_SESSION['admin'] == 1){
    $Marcas = $this->model->getMarcas();
    $id_producto = $param[0];
    $Producto = $this->model->getProducto($id_producto);
    $this->view->MostrarEditarProducto($Producto[0],$Marcas);
}
}


function GuardarEditarProducto(){
    if($_SESSION['admin'] == 1){
  $id_producto = $_POST["idform"];
  $nombre = $_POST["nombreform"];
  $talle = $_POST["talleform"];
  $stock = $_POST["stockform"];
  $marca = $_POST["marcaform"];
  $this->model->GuardarEditarProducto($nombre,$talle,$stock,$marca,$id_producto);
  header(TABLA);
}
  //header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
}

function MostrarProducto($param){
  $producto = $this->model->getProducto($param[0]);
  $nombremarca = $this->model->GetNombreMarca($param[0]);
  $imagen = $this->model->getImagen($param[0]);
  if($_SESSION['admin'] == 1){
  $this->view->MostrarProducto($producto[0],$nombremarca[0],$imagen,true);
}else {
  $this->view->MostrarProducto($producto[0],$nombremarca[0],$imagen, false);
}
}


function FiltrarProducto($param){
    $marca = $param[0];
    $productos = $this->model->getProductoSegunMarca($marca);
    $marcas = $this->model->getMarcas();
      if($_SESSION['admin'] == 1){
    $this->view->MostrarTablaAdmin($marcas, $productos, true);
  }else {
    $this->view->MostrarTablaAdmin($marcas, $productos, false);
  }
//header(TABLA);
}
}


 ?>

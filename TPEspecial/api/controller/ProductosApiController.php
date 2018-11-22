<?php

require_once "Api.php";
require_once "./../model/TiendaModel.php";

class ProductosApiController extends Api
{
private $model;

  function __construct(){
    parent::__construct();
    $this->model = new TiendaModel();
  }

function GetProductos($param = null){
  if (isset($param)) {
    $id_producto = $param[0];
    $data  =  $this->model->getProducto($id_producto);
  }else {
    $data  =  $this->model->getProductos();
}
    if (isset($data)) {
      return $this->json_response($data, 200);
    }else {
      return $this->json_response(null, 404);
    }
}

function BorrarProducto($param){
  if (count($param)==1) {
    $id_producto = $param[0];
    $r = $this->model->BorrarProducto($id_producto);
    return  $this->json_response("funciono", 200);
  }else {
    return $this->json_response("no anda", 404);
  }
}


function InsertarProducto($param = null){
    $arreglo= $this->getJSONData();
    $this->model->InsertarProducto($arreglo->nombre,$arreglo->talle,$arreglo->stock,$arreglo->marca);
}


function EditarProducto($param = null){
  if (count($param)==1) {
  $id_producto = $param[0];
  $arreglo= $this->getJSONData();
  $r= $this->model->GuardarEditarProducto($arreglo->nombre,$arreglo->talle,$arreglo->stock,$arreglo->marca,$id_producto);
  return $this->json_response($r, 200);

}else {
  return $this->json_response("no anda", 404);
}
}

}




 ?>

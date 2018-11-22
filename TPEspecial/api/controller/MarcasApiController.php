<?php

require_once "Api.php";
require_once "./../model/TiendaModel.php";

class MarcasApiController extends Api
{
private $model;

  function __construct(){
    parent::__construct();
    $this->model = new TiendaModel();

  }

function GetMarcas($param = null){
      if($_SESSION['admin'] == 1){
  if (isset($param)) {
    $id_marca = $param[0];
    $data  =  $this->model->getMarca($id_marca);
  }else {
    $data  =  $this->model->getMarcas();
}

    if (isset($data)) {
      return $this->json_response($data, 200);
    }else {
      return $this->json_response(null, 404);
    }
  }
}

function BorrarMarca($param){
      if($_SESSION['admin'] == 1){
  if (count($param)==1) {
    $id_marca = $param[0];
    $r = $this->model->BorrarMarca($id_marca);
    return  $this->json_response("funciono", 200);
  }else {
    return $this->json_response("no anda", 404);
  }
}
}


function InsertarMarca($param = null){
    $arreglo= $this->getJSONData();
    $this->model->InsertarMarca($arreglo->nombre,$arreglo->descripcion);

}

function EditarMarca($param = null){
  if (count($param)==1) {
  $id_marca = $param[0];
  $arreglo= $this->getJSONData();
  $r= $this->model->GuardarEditarMarca($arreglo->nombre,$arreglo->descripcion,$id_marca);
  return $this->json_response($r, 200);

}else {
  return $this->json_response("no anda", 404);
}
}


}




 ?>

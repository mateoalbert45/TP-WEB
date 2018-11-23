<?php
require_once "Api.php";
require_once "ApiSecuredController.php";
require_once "./../model/ComentariosModel.php";



class ComentariosApiController extends ApiSecuredController
{
private $model;

  function __construct(){
    parent::__construct();
    $this->model = new ComentariosModel();

  }

function GetComentarios($param = null){

  if (isset($param)) {
    $id_comentario = $param[0];
    $data  =  $this->model->GetComentario($id_comentario);
  }else {
    $data  =  $this->model->GetComentarios();
}
    if (isset($data)) {
      return $this->json_response($data, 200);
    }else {
      return $this->json_response(null, 404);
    }

}

function BorrarComentarios($param){
  if($_SESSION['admin'] == 1){
  if (count($param)==1) {
    $id_comentario = $param[0];
    $r = $this->model->BorrarComentarios($id_comentario);
    return  $this->json_response("funciono", 200);
  }else {
    return $this->json_response("no anda", 404);
  }
}
}


function InsertarComentarios($param){
    $id_producto = $param[0];
    $arreglo= $this->getJSONData();
    $this->model->InsertarComentarios($arreglo->texto,$arreglo->calificacion,$id_producto);

}



}




 ?>

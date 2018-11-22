<?php

require_once "./view/FormasPagoView.php";
require_once "./model/TiendaModel.php";

class FormasPagoController
{
  private $view;
  private $model;

  function __construct()
  {
    $this->view = new FormasPagoView();
        $this->model = new TiendaModel();
  }


  function FormasPago(){
    $this->view->MostrarFormas();
}


}


 ?>

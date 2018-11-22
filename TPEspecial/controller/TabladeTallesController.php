<?php

require_once "./view/TabladeTallesView.php";
require_once "./model/TiendaModel.php";

class TabladeTallesController
{
  private $view;
  private $model;

  function __construct()
  {
    $this->view = new TabladeTallesView();
        $this->model = new TiendaModel();
  }


  function TabladeTalles(){
    $this->view->MostrarTablaTalles();
  }


}


 ?>

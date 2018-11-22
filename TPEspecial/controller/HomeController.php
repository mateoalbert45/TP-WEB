<?php

require_once "./view/HomeView.php";
require_once "./model/TiendaModel.php";

class HomeController
{
  private $view;
  private $model;

  function __construct()
  {
    $this->view = new HomeView();
    $this->model = new TiendaModel();
  }

  function Home(){
    $this->view->Mostrar();
}


}


 ?>

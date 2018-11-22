<?php

require_once "./view/ContactosView.php";
require_once "./model/TiendaModel.php";

class ContactosController
{
  private $view;
  private $model;

  function __construct()
  {
    $this->view = new ContactosView();
        $this->model = new TiendaModel();
  }



  function Contactos(){
    $this->view->MostrarContactos();
  }



}


 ?>

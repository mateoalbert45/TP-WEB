<?php
require_once  "./view/UsuarioView.php";
require_once  "./model/UsuarioModel.php";
require_once  "LoginController.php";
require_once "SecuredController.php";

class UsuarioAdminController extends SecuredController
{
  private $view;
  private $model;
  private $Titulo;
private $xd;
  function __construct()
  {
    parent::__construct();


    $this->xd = new LoginController();
    $this->view = new UsuarioView();
    $this->model = new UsuarioModel();
    $this->Titulo = "Lista de Usuario";
  }

  function MostrarUsuario(){
      $Usuarios = $this->model->GetUsuario();
      $this->view->Mostrar($this->Titulo, $Usuarios);
  }



  function InsertarUsuario(){
    $nombre = $_POST["nombreNew"];
    $pass = $_POST["passNew"];
    $hash = password_hash($pass, PASSWORD_DEFAULT);
    $this->model->InsertarUsuario($nombre,$hash);
    header(HOME);
 }

}

 ?>

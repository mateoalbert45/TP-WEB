<?php

require_once "./view/LoginView.php";
require_once "./model/UsuarioModel.php";


class LoginController
{
  private $view;
  private $model;
  private $Titulo;

  function __construct()
  {

    $this->view = new LoginView();
    $this->model = new UsuarioModel();
    $this->Titulo = "Login";
  }



  function login(){
    $this->view->mostrarLogin();

  }


  function logout(){
      session_start();
      session_destroy();
      header(HOME);
  }

  function verificarLogin(){
    $usuario = $_POST["usuarioId"];
    $pass = $_POST["passwordId"];
    $dbUser = $this->model->getUser($usuario);
    if(isset($dbUser[0])){
    if (password_verify($pass,$dbUser[0]["pass"])){
      session_start();
      $_SESSION["User"] = $usuario;
      $_SESSION['admin'] = $dbUser[0]['admin'];
      header(TABLA);
    }else {
      $this->view->mostrarLogin("Contraseña incorrecta");
    }
  }else {
    $this->view->mostrarLogin("No existe el usuario");
  }
}

function verificarCrearCuenta(){
  $usuario = $_POST["nombreNew"];
  $pass = $_POST["passNew"];
  $dbUser = $this->model->getUser($usuario);
  if(isset($dbUser[0])){
      $this->view->mostrarLogin("Usuario ya Registrado");
  }else {
    $this->model->InsertarUsuario($usuario, $pass);
    session_start();
    $_SESSION['User'] = $usuario;
    $_SESSION['admin'] = 0;
  }
}


}
 ?>

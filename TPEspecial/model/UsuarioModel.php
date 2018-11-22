<?php
/**
 *
 */
class UsuarioModel
{
  private $db;

  function __construct()
  {
    $this->db = $this->Connect();
  }

  function Connect(){
    return new PDO('mysql:host=localhost;'
    .'dbname=db_web;charset=utf8'
    , 'root', '');
  }

  function GetUsuarios(){
      $sentencia = $this->db->prepare( "select * from usuario");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function InsertarUsuario($nombre, $pass){
    $hash = password_hash($pass, PASSWORD_DEFAULT);
    $sentencia = $this->db->prepare("INSERT INTO usuario(nombre, pass) VALUES(?,?)");
    $sentencia->execute(array($nombre, $hash));
    header(HOME);
  }

  function GetUser($user){
      $sentencia = $this->db->prepare( "select * from usuario where nombre=? limit 1");
      $sentencia->execute(array($user));
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

}


 ?>

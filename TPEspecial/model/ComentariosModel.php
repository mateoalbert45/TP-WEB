<?php
/**
 *
 */
class ComentariosModel
{
  private $db;

  function __construct()
  {
    $this->db = $this->connect();
  }


  function GetComentarios(){
    $sentencia_producto = $this->db->prepare( "select * from comentario");
    $sentencia_producto->execute();
    return $sentencia_producto->fetchAll(PDO::FETCH_ASSOC);
  }

  function GetComentario($id){
    $sentencia_marca = $this->db->prepare( "select * from comentario where id_producto=?");
    $sentencia_marca->execute(array($id));
    return $sentencia_marca->fetchAll(PDO::FETCH_ASSOC);
  }



  function getProductoSegunMarca($id_marca){
    $sentencia_producto = $this->db->prepare( "select * from producto where id_marca=?");
    $sentencia_producto->execute(array($id_marca));
    return $sentencia_producto->fetchAll(PDO::FETCH_ASSOC);
  }

  private function connect(){
    return new PDO('mysql:host=localhost;'
    .'dbname=db_web;charset=utf8'
    , 'root', '');
  }



  function InsertarComentarios($texto,$calificacion,$id_producto){
    $sentencia =$this->db->prepare("INSERT INTO comentario(texto, calificacion, id_producto) VALUES(?,?,?)");
    $sentencia->execute(array($texto,$calificacion,$id_producto));
}

function InsertarProducto($nombre,$talle,$stock,$marca,$tempPath){
  $sentencia =$this->db->prepare("INSERT INTO producto(nombre, talle, stock, id_marca) VALUES(?,?,?,?)");
  $sentencia->execute(array($nombre,$talle,$stock,$marca));
  $lastId =  $this->db->lastInsertId();
  foreach ($tempPath as $img) {
    $path = $this->subirImagen($img);
    $this->InsertarImagen($path,$lastId);
  }

}

function InsertarImagen($ruta,$id){
  $sentencia =$this->db->prepare("INSERT INTO imagen(ruta, id_producto) VALUES(?,?)");
  $sentencia->execute(array($ruta,$id));

}

  function BorrarComentarios($id_comentario){
    $sentencia = $this->db->prepare( "delete from comentario where id=?");
    $sentencia->execute(array($id_comentario));
  }



}


 ?>

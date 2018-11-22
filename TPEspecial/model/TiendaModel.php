<?php
/**
 *
 */
class TiendaModel
{
  private $db;

  function __construct()
  {
    $this->db = $this->connect();
  }


  function getProductos(){
    $sentencia_producto = $this->db->prepare( "select * from producto ORDER BY 5 DESC");
    $sentencia_producto->execute();
    return $sentencia_producto->fetchAll(PDO::FETCH_ASSOC);
  }

  function getMarcas(){
    $sentencia_marca = $this->db->prepare( "select * from marca");
    $sentencia_marca->execute();
    return $sentencia_marca->fetchAll(PDO::FETCH_ASSOC);
  }


  function getMarca($id_marca){
    $sentencia_marca = $this->db->prepare( "select * from marca where id_marca=?");
    $sentencia_marca->execute(array($id_marca));
    return $sentencia_marca->fetchAll(PDO::FETCH_ASSOC);
  }

  function getProducto($id_producto){
    $sentencia_producto = $this->db->prepare( "select * from producto where id_producto=?");
    $sentencia_producto->execute(array($id_producto));
    return $sentencia_producto->fetchAll(PDO::FETCH_ASSOC);
  }

  function getImagen($id_producto){
    $sentencia_imagen = $this->db->prepare( "select * from imagen where id_producto=?");
    $sentencia_imagen->execute(array($id_producto));
    return $sentencia_imagen->fetchAll(PDO::FETCH_ASSOC);
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


  private function subirImagen($imagen){
    $destino_final = 'images/' . uniqid() . '.jpg';
    echo "destino_final: ".$destino_final;
    move_uploaded_file($imagen, $destino_final);
    return $destino_final;
}


  function InsertarMarca($nombre,$descripcion){
    $sentencia =$this->db->prepare("INSERT INTO marca(nombre, descripcion) VALUES(?,?)");
    $sentencia->execute(array($nombre,$descripcion));
}

function InsertarProducto($nombre,$talle,$stock,$marca,$tempPath){
  $sentencia =$this->db->prepare("INSERT INTO producto(nombre, talle, stock, id_marca) VALUES(?,?,?,?)");
  $sentencia->execute(array($nombre,$talle,$stock,$marca));
  $lastId =  $this->db->lastInsertId();
  foreach ($tempPath as $img) {
      $this->InsertarImagen($img,$lastId);
  }

}


function InsertarImagen($img,$id){
  $ruta = $this->subirImagen($img);
  $sentencia =$this->db->prepare("INSERT INTO imagen(ruta, id_producto) VALUES(?,?)");
  $sentencia->execute(array($ruta,$id));

}

  function BorrarMarca($id_marca){
    $sentencia = $this->db->prepare( "delete from marca where id_marca=?");
    $sentencia->execute(array($id_marca));
  }

  function BorrarProducto($id_producto){
    $sentencia = $this->db->prepare( "delete from producto where id_producto=?");
    $this->BorrarImagen($id_producto);
    //acordate de hacer le borrar comentario
    $sentencia->execute(array($id_producto));

  }

  private function BorrarImagen($id_producto){
    $sentencia = $this->db->prepare( "delete from imagen where id_producto=?");
    $sentencia->execute(array($id_producto));
  }


  function GuardarEditarMarca($nombre,$descripcion,$id_marca){
  echo $nombre ."".$descripcion."".$id_marca;
  $sentencia_marca = $this->db->prepare( "update marca set nombre = ? , descripcion = ?  where id_marca=?");
  $sentencia_marca->execute(array($nombre,$descripcion,$id_marca));

}

function GuardarEditarProducto($nombre,$talle,$stock,$marca,$id_producto){
      echo $nombre ."".$talle."".$id_producto."".$stock;
$sentencia = $this->db->prepare( "update producto set nombre = ?, talle = ?, stock = ?, id_marca = ? where id_producto=?");
$sentencia->execute(array($nombre,$talle,$stock,$marca,$id_producto));

}

function GetNombreMarca($id){
$sentencia = $this->db->prepare( "select M.nombre FROM producto P inner join marca M on P.id_marca = M.id_marca where P.id_producto=?");
$sentencia->execute(array($id));
return $sentencia->fetchAll(PDO::FETCH_ASSOC);
}

}


 ?>

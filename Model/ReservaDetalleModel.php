<?php
require_once __DIR__ . '/../BD/Conexion.php';

class ReservaDetalleModel{
  //ATRIBUTOS
  private $idreserva;
  private $idcliente;
  private $precio;

  function getidreserva() { return $this->idreserva; }
  function setidreserva($idreserva) { $this->idreserva = $idreserva; }
  function getidcliente() { return $this->idcliente; }
  function setidcliente($idcliente) { $this->idcliente = $idcliente; }
  function getprecio() { return $this->precio; }
  function setprecio($precio) { $this->precio = $precio; }

  //--METODOS
  function Listar(){
    $query = "select * from treservadetalle ORDER BY idreserva ASC";
    $db = new ConexionBD();
    $lista = $db->ejecutarQuery($query);
    return $lista;
  }
  function Insertar(){
    $idreserva = $this->getidreserva();
    $idcliente = $this->getidcliente();
    $precio = $this->getprecio();
    $query="insert into treservadetalle values ('$idreserva', '$idcliente', '$precio');";
    $db = new ConexionBD();
    $db->ejecutarQuery2($query);
  }
  function Eliminar($idreserva, $idcliente){
    $query="delete from treservadetalle where idreserva='$idreserva' AND idcliente='$idcliente';";
    $db = new ConexionBD();
    $db->ejecutarQuery2($query);
  }
  function Editar($idreserva, $idcliente){
    $precio = $this->getprecio();
    $query = "UPDATE treservadetalle SET precio = '$precio' WHERE idreserva = '$idreserva' AND idcliente = '$idcliente' ;";
    $db = new ConexionBD();
    $db->ejecutarQuery2($query);
  }
  function Recuperar($idreserva, $idcliente){
    $query = "select * from treservadetalle where idreserva='$idreserva' AND idcliente = '$idcliente';";
    $db = new ConexionBD();
    $lista = $db->ejecutarQuery($query);
    return $lista;
  }
}
?>

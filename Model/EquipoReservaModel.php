<?php
require_once __DIR__ . '/../BD/Conexion.php';

class EquipoReservaModel{
  //ATRIBUTOS
  private $idreserva;
  private $idequipo;
  private $precio;
  private $cantidad;
  private $total;

  function getidreserva() { return $this->idreserva; }
  function setidreserva($idreserva) { $this->idreserva = $idreserva; }
  function getidequipo() { return $this->idequipo; }
  function setidequipo($idequipo) { $this->idequipo = $idequipo; }
  function getprecio() { return $this->precio; }
  function setprecio($precio) { $this->precio = $precio; }
  function getcantidad() { return $this->cantidad; }
  function setcantidad($cantidad) { $this->cantidad = $cantidad; }
  function gettotal() { return $this->total; }
  function settotal($total) { $this->total = $total; }

  //--METODOS
  function Listar(){
    $query = "SELECT * FROM tequiporeserva ORDER BY idreserva ASC";
    $db = new ConexionBD();
    $lista = $db->ejecutarQuery($query);
    return $lista;
  }
  function Insertar(){
    $idreserva = $this->getidreserva();
    $idequipo = $this->getidequipo();
    $precio = $this->getprecio();
    $cantidad = $this->getcantidad();
    $total = $this->gettotal();
    $query="INSERT INTO tequiporeserva VALUES ('$idreserva', '$idequipo', '$precio', '$cantidad', '$total');";
    $db = new ConexionBD();
    $db->ejecutarQuery2($query);
  }
  function Eliminar($idreserva, $idequipo){
    $query="DELETE FROM tequiporeserva WHERE idreserva='$idreserva' AND idequipo='$idequipo';";
    $db = new ConexionBD();
    $db->ejecutarQuery2($query);
  }
  function Editar($idreserva, $idequipo){
    $precio = $this->getprecio();
    $cantidad = $this->getcantidad();
    $total = $this->gettotal();
    $query = "UPDATE tequiporeserva SET precio = '$precio', cantidad = '$cantidad', total = '$total' WHERE idreserva = '$idreserva' AND idequipo = '$idequipo' ;";
    $db = new ConexionBD();
    $db->ejecutarQuery2($query);
  }
  function Recuperar($idreserva, $idequipo){
    $query = "SELECT * FROM tequiporeserva WHERE idreserva='$idreserva' AND idequipo = '$idequipo';";
    $db = new ConexionBD();
    $lista = $db->ejecutarQuery($query);
    return $lista;
  }
}
?>

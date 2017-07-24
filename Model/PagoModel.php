<?php
require_once __DIR__ . '/../BD/Conexion.php';

class PagoModel{
  //ATRIBUTOS
  private $idpago;
  private $idreserva;
  private $montototal;

  function getidpago() { return $this->idpago; }
  function setidpago($idpago) { $this->idpago = $idpago; }
  function getidreserva() { return $this->idreserva; }
  function setidreserva($idreserva) { $this->idreserva = $idreserva; }
  function getmontototal() { return $this->montototal; }
  function setmontototal($montototal) { $this->montototal = $montototal; }

  //--METODOS
  function Listar(){
    $query = "select * from tpago ORDER BY idpago ASC";
    $db = new ConexionBD();
    $lista = $db->ejecutarQuery($query);
    return $lista;
  }
  function Insertar(){
    $idpago = $this->getidpago();
    $idreserva = $this->getidreserva();
    $montototal = $this->getmontototal();
    $query="insert into tpago values ('$idpago', '$idreserva', '$montototal');";
    $db = new ConexionBD();
    $db->ejecutarQuery2($query);
  }
  function Eliminar($idpago){
    $query="delete from tpago where idpago='$idpago';";
    $db = new ConexionBD();
    $db->ejecutarQuery2($query);
  }
  function Editar($idpago){
    $idreserva = $this->getidreserva();
    $montototal = $this->getmontototal();
    $query = "UPDATE tpago SET idreserva = '$idreserva' AND montototal = '$montototal' WHERE idpago = '$idpago' ;";
    $db = new ConexionBD();
    $db->ejecutarQuery2($query);
  }
  function Recuperar($idreserva, $idpago){
    $query = "select * from tpago where idpago = '$idpago';";
    $db = new ConexionBD();
    $lista = $db->ejecutarQuery($query);
    return $lista;
  }
}
?>

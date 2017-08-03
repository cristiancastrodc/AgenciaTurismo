<?php
require_once __DIR__ . '/../BD/Conexion.php';

class ReservaModel{
  //ATRIBUTOS
  private $idreserva;
  private $idtour;
  private $fechaviaje;

  function getidreserva(){return $this->idreserva;}
  function setidreserva($idreserva){$this->idreserva=$idreserva;}
  function getidtour(){return $this->idtour;}
  function setidtour($idtour){$this->idtour=$idtour;}
  function getfechaviaje(){return $this->fechaviaje;}
  function setfechaviaje($fechaviaje){$this->fechaviaje=$fechaviaje;}

  //--METODOS
  function Listar(){
    $query = "SELECT * from treserva ORDER BY idreserva ASC";
    $db = new ConexionBD();
    $lista = $db->ejecutarQuery($query);
    return $lista;
  }
  function Insertar(){
    $idreserva=$this->getidreserva();
    $idtour=$this->getidtour();
    $fechaviaje=$this->getfechaviaje();
    $query="INSERT into treserva values ('$idreserva','$idtour','$fechaviaje');";
    $db = new ConexionBD();
    $db->ejecutarQuery2($query);
  }
  function Eliminar($idreserva){
    $query="DELETE from treserva where idreserva='$idreserva';";
    $db = new ConexionBD();
    $db->ejecutarQuery2($query);
  }
  function Editar($idreserva){
    $idtour=$this->getidtour();
    $idcliente= $this->getidcliente();
    $fechaviaje=$this->getfechaviaje();
    $query = "UPDATE treserva SET idtour = '$idtour', fechaviaje = '$fechaviaje' WHERE idreserva='$idreserva' ;";
    $db = new ConexionBD();
    $db->ejecutarQuery2($query);
  }
  function Recuperar($idreserva){
    $query = "SELECT * from treserva where idreserva='$idreserva';";
    $db = new ConexionBD();
    $lista = $db->ejecutarQuery($query);
    return $lista;
  }
}
?>
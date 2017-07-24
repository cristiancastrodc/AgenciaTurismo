<?php
require_once __DIR__ . '/../BD/Conexion.php';

class ReservaModel{
  //ATRIBUTOS
  private $idreserva;
  private $idtour;
  private $idcliente;
  private $idequipo;
  private $fechaviaje;
  private $montototal;

  function getidreserva(){return $this->idreserva;}
  function setidreserva($idreserva){$this->idreserva=$idreserva;}
  function getidtour(){return $this->idtour;}
  function setidtour($idtour){$this->idtour=$idtour;}
  function getidequipo(){return $this->idequipo;}
  function setidequipo($idequipo){$this->idequipo=$idequipo;}
  function getfechaviaje(){return $this->fechaviaje;}
  function setfechaviaje($fechaviaje){$this->fechaviaje=$fechaviaje;}

  //--METODOS
  function Listar(){
    $query = "select * from treserva ORDER BY idreserva ASC";
    $db = new ConexionBD();
    $lista = $db->ejecutarQuery($query);
    return $lista;
  }
  function Insertar(){
    $idreserva=$this->getidreserva();
    $idtour=$this->getidtour();
    $idequipo=$this->getidequipo();
    $fechaviaje=$this->getfechaviaje();
    $query="insert into treserva values ('$idreserva','$idtour','$idequipo','$fechaviaje');";
    $db = new ConexionBD();
    $db->ejecutarQuery2($query);
  }
  function Eliminar($idreserva){
    $query="delete from treserva where idreserva='$idreserva';";
    $db = new ConexionBD();$db->ejecutarQuery2($query);
  }
  function Editar($idreserva){
    $idtour=$this->getidtour();
    $idcliente= $this->getidcliente();
    $idequipo=$this->getidequipo();
    $fechaviaje=$this->getfechaviaje();
    $montototal=$this->getmontototal();
    $query = "UPDATE treserva SET idtour = '$idtour', idequipo = '$idequipo', fechaviaje = '$fechaviaje' WHERE idreserva='$idreserva' ;";
    $db = new ConexionBD();
    $db->ejecutarQuery2($query);
  }
  function Recuperar($idreserva){
    $query = "select * from treserva where idreserva='$idreserva';";
    $db = new ConexionBD();
    $lista = $db->ejecutarQuery($query);
    return $lista;
  }
}
?>
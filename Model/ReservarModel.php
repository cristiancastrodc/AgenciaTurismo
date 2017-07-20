<?php
require_once 'C:/xampp/htdocs/HappyGringoSistema4/BD/Conexion.php';
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
    function getidcliente(){return $this->idcliente;}
    function setidcliente($idcliente){$this->idcliente=$idcliente;}
    function getidequipo(){return $this->idequipo;}
    function setidequipo($idequipo){$this->idequipo=$idequipo;}
    function getfechaviaje(){return $this->fechaviaje;}
    function setfechaviaje($fechaviaje){$this->fechaviaje=$fechaviaje;}
    function getmontototal(){return $this->montototal;}
    function setmontototal($montototal){$this->montototal=$montototal;}
    
    //--METODOS
    function Listar(){
        $query = "select * from treserva2";
        $db = new ConexionBD();
        $lista = $db->ejecutarQuery($query);
        return $lista;
    }
    function Insertar(){
        $idreserva=$this->getidreserva();
        $idtour=$this->getidtour();
        $idcliente= $this->getidcliente();
        $idequipo=$this->getidequipo();
        $fechaviaje=$this->getfechaviaje();
        $montototal=$this->getmontototal();
        $query="insert into treserva2 values ('$idreserva','$idtour','$idcliente','$idequipo','$fechaviaje','$montototal');";
        $db = new ConexionBD();$db->ejecutarQuery2($query);
    }
    function Eliminar($idreserva){
        $query="delete from treserva2 where idreserva='$idreserva';";
        $db = new ConexionBD();$db->ejecutarQuery2($query);
    }
    function Editar($idreserva){
        $idtour=$this->getidtour();
        $idcliente= $this->getidcliente();
        $idequipo=$this->getidequipo();
        $fechaviaje=$this->getfechaviaje();
        $montototal=$this->getmontototal();
        $query = "UPDATE treserva2 SET idtour = '$idtour', idcliente='$idcliente',idequipo='$idequipo',fechaviaje='$fechaviaje',montototal='$montototal', WHERE idreserva='$idreserva' ;";
        $db = new ConexionBD();
        $db->ejecutarQuery2($query);
    }
    function Recuperar($idreserva){
        $query = "select * from treserva2 where idreserva='$idreserva';";
        $db = new ConexionBD();
        $lista = $db->ejecutarQuery($query);
        return $lista;
    }
}
?>
<?php
require_once __DIR__ . '/../BD/Conexion.php';

class EquipoModel{
    //ATRIBUTOS
    private $idequipo;
    private $nombre;
    private $precio;
    private $cantidad;

    function getidequipo(){return $this->idequipo;}
    function setidequipo($idequipo){$this->idequipo=$idequipo;}
    function getnombre(){return $this->nombre;}
    function setnombre($nombre){$this->nombre=$nombre;}
    function getcantidad(){return $this->cantidad;}
    function setcantidad($cantidad){$this->cantidad=$cantidad;}
    function getprecio(){return $this->precio;}
    function setprecio($precio){$this->precio=$precio;}

    //--METODOS
    public function Listar(){
        $query = "select * from tequipos";
        $db = new ConexionBD();
        $lista = $db->ejecutarQuery($query);
        return $lista;
    }
    public function Insertar(){
        $idequipo = $this->getidequipo();
        $nombre = $this->getnombre();
        $precio = $this->getprecio();
        $cantidad = $this->getcantidad();
        $query="insert into tequipos values ('$idequipo','$nombre','$cantidad','$precio');";
        $db = new ConexionBD();
        $db->ejecutarQuery($query);
    }
    public function recuperarUnEquipo($idequipo){
        $query = "select * from tequipos where idequipo='$idequipo';";
        $db = new ConexionBD();
        $lista = $db->ejecutarQuery($query);
        return $lista[0];
    }
    public function Editar(){
        $idequipo = $this->getidequipo();
        $nombre = $this->getnombre();
        $precio = $this->getprecio();
        $cantidad = $this->getcantidad();
        $query = "UPDATE tequipos SET nombre= '$nombre', cantidad='$cantidad', precio='$precio' WHERE idequipo='$idequipo';";
        $db = new ConexionBD();
        $db->ejecutarQuery2($query);
    }
    public function Eliminar($idequipo){
        $query="delete from tequipos where idequipo='$idequipo';";
        $db = new ConexionBD();
        $db->ejecutarQuery($query);
    }
}
?>
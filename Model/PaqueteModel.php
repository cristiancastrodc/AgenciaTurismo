<?php
require_once '../BD/Conexion.php';
class PaqueteModel{
    //ATRIBUTOS
    private $idpaquete;
    private $nombre;
    private $terminos;
    
    function getidpaquete(){return $this->idpaquete;}
    function setidpaquete($idpaquete){$this->idpaquete=$idpaquete;}
    function getnombre(){return $this->nombre;}
    function setnombre($nombre){$this->nombre=$nombre;}
    function getterminos(){return $this->terminos;}
    function setterminos($terminos){$this->terminos=$terminos;}
    
    //--METODOS
    public function Listar(){
        $query = "select * from tpaquetes";
        $db = new ConexionBD();
        $lista = $db->ejecutarQuery($query);
        return $lista;
    }
    public function Insertar(){
        $idpaquete= $this->getidpaquete();
        $nombre = $this->getnombre();
        $terminos = $this->getterminos();
        $query="insert into tpaquetes values ('$idpaquete','$nombre','$terminos');";
        $db = new ConexionBD();
        $db->ejecutarQuery2($query);
    }
    public function Eliminar(){
        $idpaquete= $this->getidpaquete();
        $query="delete from tpaquetes where idpaquete='$idpaquete';";
        $db = new ConexionBD();
        $db->ejecutarQuery2($query);
    }
    public function Editar(){
        $idpaquete= self::getidpaquete();
        $nombre = self::getnombre();
        $terminos = self::getterminos();
        $query = "UPDATE tpaquetes SET nombre= '$nombre', terminos='$terminos' WHERE idpaquete='$idpaquete';";
        $db = new ConexionBD();
        $db->ejecutarQuery2($query);
    }
    public function RecuperarUnPaquete($idpaquete){
        $query = "select * from tpaquetes where idpaquete='$idpaquete';";
        $db = new ConexionBD();
        $lista = $db->ejecutarQuery($query);
        return $lista[0];
    }
    public function Recuperar($idpaquete){
        $query = "select * from tpaquetes where idpaquete='$idpaquete';";
        $db = new ConexionBD();
        $lista = $db->ejecutarQuery($query);
        return $lista;
    }
    public function RecuperarUltimo(){
        $query = "select idpaquete from tpaquetes order by idpaquete desc limit 1;";
        $db = new ConexionBD();
        $lista = $db->ejecutarQuery($query);
        return $lista[0];
    }
}
?>
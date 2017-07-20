<?php
require_once '../BD/Conexion.php';
class GuiasModel{
    //ATRIBUTOS
    private $idguia;
    private $fullnombre;
    private $genero;
    private $telefono;
    private $email;
    private $idiomas;
    private $descripcion;
    
    function getidguia(){return $this->idguia;}function setidguia($idguia){$this->idguia=$idguia;}
    function getfullnombre(){return $this->fullnombre;}function setfullnombre($fullnombre){$this->fullnombre=$fullnombre;}
    function getgenero(){return $this->genero;}function setgenero($genero){$this->genero=$genero;}
    function gettelefono(){return $this->telefono;}function settelefono($telefono){$this->telefono=$telefono;}
    function getemail(){return $this->email;}function setemail($email){$this->email=$email;}
    function getidiomas(){return $this->idiomas;}function setidiomas($idiomas){$this->idiomas=$idiomas;}
    function getdescripcion(){return $this->descripcion;}function setdescricion($descripcion){$this->descripcion=$descripcion;}
    
    
    //--METODOS
    function Listar(){
        $query = "select * from tguias;";
        $db = new ConexionBD();
        $lista = $db->ejecutarQuery($query);
        return $lista;
    }
    
    function Insertar(){
        $idguia = $this->getidguia();
        $fullnombre= $this->getfullnombre();
        $genero = $this->getgenero();
        $telefono= $this->gettelefono();
        $email= $this->getemail();
        $idiomas= $this->getidiomas();
        $descripcion= $this->getdescripcion();
        $query="insert into tguias values ('$idguia','$fullnombre','$genero','$telefono','$email','$idiomas','$descripcion');";
        $db = new ConexionBD();
        $db->ejecutarQuery2($query);
    }
    public function recuperarUnGuia($idguia){
        $query = "select * from tguias where idguia='$idguia';";
        $db = new ConexionBD();
        $lista = $db->ejecutarQuery($query);
        return $lista[0];
    }
    function Editar(){
        $idguia= $this->getidguia();
        $fullnombre= $this->getfullnombre();
        $genero = $this->getgenero();
        $telefono= $this->gettelefono();
        $email = $this->getemail();
        $query = "update tguias set fullnombre='$fullnombre', genero= '$genero',telefono='$telefono',email='$email',  WHERE idguia='$idguia' ;";
        $db = new ConexionBD();
        $db->ejecutarQuery2($query);
    }
    
    function Eliminar($idguia){
        $query="delete from tguias where idguia='$idguia';";
        $db = new ConexionBD();
        $db->ejecutarQuery($query);
    }
}
?>
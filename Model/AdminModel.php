<?php
require_once '../BD/Conexion.php';
class AdminModel{
    //ATRIBUTOS
    private $idadmin;
    private $usuario;
    private $contraseña;
    private $habilitado;
    private $nombre;
    private $apellidos;
    private $cargo;
        
    function getidadmin(){return $this->idadmin;} function setidadmin($idadmin){$this->idadmin=$idadmin;}
    
    function getusuario(){return $this->usuario;}function setusuario($usuario){$this->usuario=$usuario;}
    
    function getcontraseña(){return $this->contraseña;}function setcontraseña($contraseña){$this->contraseña=$contraseña;}
    
    function gethabilitado(){return $this->habilitado;}function sethabilitado($habilitado){$this->habilitado=$habilitado;}
    
    function getnombre(){return $this->nombre;  }function setnombre($nombre){$this->nombre=$nombre;    }
    
    function getapellidos(){return $this->apellidos;}function setapellidos($apellidos){$this->apellidos=$apellidos;   }
    
    function getcargo(){return $this->cargo;    }function setcargo($cargo){$this->cargo=$cargo;    }
    
    //--METODOS
    function Listar(){
        $query = "select *from tadministrador;";
        $db = new ConexionBD();
        $lista = $db->ejecutarQuery2($query);
        return $lista;
    }    
    function Insertar(){
        $idadmin=$this->getidadmin();
        $usuario=$this->getusuario();
        $contraseña = $this->getcontraseña();
        $habilitado=$this->gethabilitado();
        $nombre = $this->getnombre();
        $apellidos = $this->getapellidos();
        $cargo = $this->getcargo();
        $query="insert into tadministrador values ('$idadmin','$usuario','$contraseña','$habilitado','$nombre','$apellidos','$cargo');";
        $db = new ConexionBD();
        $db->ejecutarQuery2($query);
    }
    function Eliminar($idadmin){
        $query="delete from tadministrador where idadmin='$idadmin';";
        $db = new ConexionBD();
        $db->ejecutarQuery2($query);
    }
    function Editar($idadmin){
        $usuario=$this->getusuario();
        $contraseña = $this->getcontraseña();
        $habilitado=$this->gethabilitado();
        $nombre = $this->getnombre();
        $apellidos = $this->getapellidos();
        $cargo = $this->getcargo();
        $query = "UPDATE tadministrador SET usuario = '$usuario', contraseña='$contraseña', habilitado='$habilitado',nombre='$nombre',apellidos='$apellidos', cargo='$cargo', WHERE idadmin='$idadmin' ;";
        $db = new ConexionBD();
        $db->ejecutarQuery2($query);
    }
    function Recuperar($idadmin){
        $query = "select * from tadministrador where idadmin='$idamin';";
        $db = new ConexionBD();
        $lista = $db->ejecutarQuery($query);
        return $lista;
    } 
}

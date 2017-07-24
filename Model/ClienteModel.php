<?php
require_once __DIR__ . '/../BD/Conexion.php';
class ClienteModel{
    //ATRIBUTOS
    private $idcliente;
    private $nombres;
    private $apellidos;
    private $genero;
    private $telefono;
    private $email;
    private $pais;
    private $nropasaporte;
    private $fechanacimiento;
    private $estudiante;

    function getidcliente(){return $this->idcliente;}function setidcliente($idcliente){$this->idcliente=$idcliente;}
    function getnombres(){return $this->nombres;}function setnombres($nombre){$this->nombres=$nombre;}
    function getapellidos(){return $this->apellidos;}function setapellidos($apellidos){$this->apellidos=$apellidos;}
    function getgenero(){return $this->genero;}function setgenero($genero){$this->genero=$genero;}
    function gettelefono(){return $this->telefono;}function settelefono($telefono){$this->telefono=$telefono;}
    function getemail(){return $this->email;}function setemail($email){$this->email=$email;}
    function getpais(){return $this->pais;}function setpais($pais){$this->pais=$pais;}
    function getnropasaporte(){return $this->nropasaporte;}function setnropasaporte($nropasaporte){$this->nropasaporte=$nropasaporte;}
    function getfechanacimiento(){return $this->fechanacimiento;}function setfechanacimiento($fechanacimiento){$this->fechanacimiento=$fechanacimiento;}
    function getestudiante(){return $this->estudiante;}function setestudiante($estudiante){$this->estudiante = $estudiante;}
    //--METODOS
    public function Listar(){
        $query = "select * from tclientes ORDER BY idcliente ASC";
        $db = new ConexionBD();
        $lista = $db->ejecutarQuery($query);
        return $lista;
    }
    public function Insertar(){
        $idcliente=$this->getidcliente();
        $nombres=$this->getnombres();
        $apellidos = $this->getapellidos();
        $genero=$this->getgenero();
        $telefono=$this->gettelefono();
        $email = $this->getemail();
        $pais = $this->getpais();
        $nropasaporte = $this->getnropasaporte();
        $fechanacimiento =  $this->getfechanacimiento();
        $estudiante = $this->getestudiante();
        $query="insert into tclientes values ('$idcliente','$nombres','$apellidos','$genero','$telefono','$email','$pais','$nropasaporte','$fechanacimiento','$estudiante');";
        $db = new ConexionBD();
        $db->ejecutarQuery2($query);
    }
    public function recuperarUnEquipo($idcliente){
        $query="select * from tclientes where idcliente='$idcliente';";
        $db = new ConexionBD();
        $lista =$db->ejecutarQuery($query);
        return $lista[0];
    }
    public function Editar(){
        $idcliente= $this->getidcliente();
        $nombres=$this->getnombres();
        $apellidos = $this->getapellidos();
        $genero=$this->getgenero();
        $telefono=$this->gettelefono();
        $email = $this->getemail();
        $pais = $this->getpais();
        $nropasaporte = $this->getnropasaporte();
        $fechanacimiento =  $this->getfechanacimiento();
        $estudiante = $this->getestudiante();
        $query = "UPDATE tclientes  SET nombres = '$nombres', apellidos='$apellidos',genero='$genero',telefono='$telefono',email='$email',pais='$pais', nropasaporte='$nropasaporte',fechanacimiento='$fechanacimiento',estudiante='$estudiante'  WHERE idcliente='$idcliente' ;";
        $db = new ConexionBD();
        $db->ejecutarQuery2($query);
    }
    public function Recuperar($idcliente){
        $query = "select * from tclientes where idcliente='$idcliente';";
        $db = new ConexionBD();
        $lista = $db->ejecutarQuery($query);
        return $lista;
    }
    public function Eliminar($idcliente){
        $query="delete from tclientes where idcliente='$idcliente';";
        $db = new ConexionBD();
        $db->ejecutarQuery($query);
    }
}

?>
<?php
require_once dirname(__FILE__) . '/../BD/Conexion.php';
class TourModel{
    //ATRIBUTOS
    private $idtour;
    private $idpaquete;
    private $idguia;
    private $nombretour;
    private $precio;
    private $infogeneral;
    private $iterinario;
    private $incluye;
    private $quellevar;
    private $foto;

    function getidtour(){return $this->idtour;}function setidtour($idtour){$this->idtour=$idtour;}
    function getidpaquete(){return $this->idpaquete;}function setidpaquete($idpaquete){$this->idpaquete=$idpaquete;}
    function getidguia(){return $this->idguia;}function setidguia($idguia){$this->idguia=$idguia;}
    function getnombretour(){return $this->nombretour;}function setnombretour($nombretour){$this->nombretour=$nombretour;}
    function getprecio(){return $this->precio;}function setprecio($precio){$this->precio=$precio;}
    function getinfogeneral(){return $this->infogeneral;}function setinfogeneral($infogeneral){$this->infogeneral=$infogeneral;}
    function getiterinario(){return $this->iterinario;}function setiterinario($iterinario){$this->iterinario=$iterinario;}
    function getincluye(){return $this->incluye;}function setincluye($incluye){$this->incluye=$incluye;}
    function getquellevar(){return $this->quellevar;}function setquellevar($quellevar){$this->quellevar=$quellevar;}
    function getfoto(){return $this->foto;}function setfoto($foto){$this->foto=$foto;}

    //--METODOS
    function Listar(){
        $query = "select * from ttour;";
        $db = new ConexionBD();
        $lista = $db->ejecutarQuery($query);
        return $lista;
    }
    function Insertar(){
        $idtour = $this->getidtour();
        $idpaquete = $this->getidpaquete();
        $idguia = $this->getidguia();
        $nombretour = $this->getnombretour();
        $precio = $this->getprecio();
        $infogeneral = $this->getinfogeneral();
        $iterinario = $this->getiterinario();
        $incluye = $this->getincluye();
        $quellevar = $this->getquellevar();
        $foto = $this->getfoto();
        $query="insert into ttour values ('$idtour','$idpaquete','$idguia','$nombretour','$precio','$infogeneral','$iterinario','$incluye','$quellevar','$img');";
        $db = new ConexionBD();
        $db->ejecutarQuery($query);
    }
    public function recuperarUnTour($idtour){
        $query= "select * from ttour where idtour='$idtour';";
        $db= new ConexionBD();
        $lista= $db->ejecutarQuery($query);
        return $lista[0];
    }
    function Editar(){
        $idtour = $this->getidtour();
        $idpaquete = $this->getidpaquete();
        $idguia= $this->getidguia();
        $nombretour = $this->getnombretour();
        $precio = $this->getprecio();
        $infogeneral = $this->getinfogeneral();
        $iterinario = $this->getiterinario();
        $incluye = $this->getincluye();
        $quellevar = $this->getquellevar();
        $foto = $this->getfoto();
        $query = "update ttour set idpaquete='$idpaquete',idguia='$idguia', nombretour= '$nombretour',precio='$precio',infogeneral='$infogeneral',iterinario='$iterinario',incluye='$incluye',quellevar='$quellevar',foto='$foto'  WHERE idtour='$idtour';";
        $db = new ConexionBD();
        $db->ejecutarQuery2($query);
    }
    function Eliminar($idtour){
        $query="delete from ttour where idtour='$idtour';";
        $db = new ConexionBD();
        $db->ejecutarQuery($query);
    }


    function ListarPortada(){
        $query = "select nombre from tpaquetes  p inner join ttour t on p.idpaquete=t.idpaquete group by nombre;";
        $db = new ConexionBD();
        $lista = $db->ejecutarQuery($query);
        return $lista;
    }
}

?>
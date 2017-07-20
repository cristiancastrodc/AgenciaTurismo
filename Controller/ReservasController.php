<?php
include_once 'C:/xampp/htdocs/HappyGringoSistema4/Model/ClienteModel.php';
include_once 'C:/xampp/htdocs/HappyGringoSistema4/Model/ReservarModel.php';

$Op = $_REQUEST["Op"];

$idreserva=$_REQUEST["idreserva"];
$idtour=$_REQUEST["idtour"];
$fechaviaje=$_REQUEST["fechaviaje"];

$idcliente=$_REQUEST["idcliente"];
$nombres=$_REQUEST["nombres"];
$apellido = $_REQUEST["apellidos"];
$genero= $_REQUEST["genero"];
$telefono = $_REQUEST["telefono"];
$email =$_REQUEST["email"];
$pais=$_REQUEST["pais"];
$nropasaporte=$_REQUEST["nropasaporte"];
$fechanacimiento =$_REQUEST["fechanacimiento"];
$estudiante = $_REQUEST["estudiante"];

$idequipo=$_REQUEST["idequipo"];
$montototal=$_REQUEST["montototal"];

switch ($Op){
    /*case 'Listar':
        $url="../View/Paquete/Paquete.php?Lista=".$Lista;
        break;*/
    case 'Guardar':
        fn_GuardarReserva($idreserva,$idtour,$idequipo,$idcliente,$fechaviaje,$montototal);
        fn_GuardarCliente($idcliente,$nombres,$apellido,$genero,$telefono,$email,$pais,$nropasaporte,$fechanacimiento,$estudiante);    
        $url="http://localhost:8080/HappyGringoSistema4/View/Pagina/Portada.php?Lista=[]";
        header ("location:$url");
        break;
    /*case 'Eliminar':
        $url="PaqueteController.php?Op=Listar";
        break;
    case 'Recuperar':
        $url="../View/Paquete/EditarPaquete.php?Lista=".$Lista;    
        break;
    case 'Editar':
        $url="PaqueteController.php?Op=Listar";
        break;*/
}


function fn_GuardarCliente($idcliente,$nombres,$apellido,$genero,$telefono,$email,$pais,$nropasaporte,$fechanacimiento,$estudiante){    
    $model = new ClienteModel();
    $model->setidcliente($idcliente);
    $model->setnombres($nombres);
    $model->setapellidos($apellido);
    $model->setgenero($genero);
    $model->settelefono($telefono);
    $model->setemail($email);
    $model->setpais($pais);
    $model->setnropasaporte($nropasaporte);
    $model->setfechanacimiento($fechanacimiento);
    $model->setestudiante($estudiante);
    $model->Insertar();
}
function fn_GuardarReserva($idreserva,$idtour,$idequipo,$idcliente,$fechaviaje,$montototal){    
    $modelreserva  =  new ReservaModel();    
    $modelreserva->setidreserva($idreserva);
    $modelreserva->setidtour($idtour);
    $modelreserva->setidcliente($idcliente);
    $modelreserva->setidequipo($idequipo);
    $modelreserva->setfechaviaje($fechaviaje);
    $modelreserva->setmontototal($montototal);
    $modelreserva->Insertar();
}

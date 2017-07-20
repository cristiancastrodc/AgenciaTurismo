<?php
session_start();
require_once '../Model/PaqueteModel.php';
require_once '../util/Sesion.php';
try{
    //recuperamos la operacion
    $Op = $_REQUEST["Op"];
    $model = new PaqueteModel();
switch ($Op){
    case 'Listar':
        $Lista = $model->Listar();
        Session::setSesion("lista", $Lista);
        $target="../View/Paquete/Paquete.php";
        break;  
    case 'Guardar':
        $model->setidpaquete($_REQUEST["idpaquete"]);
        $model->setnombre($_REQUEST["nombre"]);
        $model->setterminos($_REQUEST["terminos"]);
        $model->insertar();
        $target="PaqueteController.php?Op=Listar";
        break;
    case 'Ver':
        $idpaquete=$_REQUEST['idpaquete'];
        $Datos = $model->RecuperarUnPaquete($idpaquete);
        $idpaquete=$Datos['idpaquete'];
        $nombre=$Datos['nombre'];
        $terminos=$Datos['terminos'];
        $target="../View/Paquete/VerPaquete.php?idpaquete=".$idpaquete."&nombre=".$nombre."&terminos=".$terminos;    
        break;
    case 'RecuperarUltimo':
        $Datos = $model->RecuperarUltimo();
        $idpaquete=$Datos['idpaquete'];
        $target="../View/Paquete/nuevoPaquete.php?idpaquete=".$idpaquete;    
        break;    
    case 'Recuperar':
        $idpaquete=$_REQUEST['idpaquete'];
        $Datos = $model->RecuperarUnPaquete($idpaquete);
        $idpaquete=$Datos['idpaquete'];
        $nombre=$Datos['nombre'];
        $terminos=$Datos['terminos'];
        $target="../View/Paquete/EditarPaquete.php?idpaquete=".$idpaquete."&nombre=".$nombre."&terminos=".$terminos;    
        break;
    case 'Editar':
        $model->setidpaquete($_REQUEST["idpaquete"]);
        $model->setnombre($_REQUEST["nombre"]);
        $model->setterminos($_REQUEST["terminos"]);
        $model->Editar();
        $target="PaqueteController.php?Op=Listar";
        break;
    case 'Eliminar':
        $model->setidpaquete($_REQUEST["idpaquete"]);
        $model->Eliminar();
        $target="PaqueteController.php?Op=Listar";
    
    default :
        Session::setSesion("mensajeErr", "Operacion Desconocida");
        $target="../View/Paquete/Paquete.php";
        break;
    }
            
} catch (Exception $e) {
    Session::setSesion("mensajeErr", $e->getMessage());
}
header ("location:$target");
?>
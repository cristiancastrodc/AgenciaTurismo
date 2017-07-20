<?php
session_start();
require_once '../Model/GuiasModel.php';
require_once '../util/Sesion.php';
try {
    $Op = $_REQUEST["Op"];
    $model = new GuiasModel();
switch ($Op){
    case 'Listar':
        $Lista = $model->Listar();
        Session::setSesion("lista", $Lista);
        $target="../View/Guia/Guia.php";
        break;
    case 'Guardar':
        $model->setidguia($_REQUEST["idguia"]);
        $model->setfullnombre($_REQUEST["fullnombre"]);
        $model->setgenero($_REQUEST["genero"]);
        $model->settelefono($_REQUEST["telefono"]);
        $model->setemail($_REQUEST["email"]);
        $model->setidiomas($_REQUEST["idiomas"]);
        $model->setdescricion($_REQUEST["descripcion"]);
        $model->insertar();
        $target="GuiaController.php?Op=Listar";
        break;
    case 'Ver':
        $idguia=$_REQUEST['idguia'];
        $Guia=$model->recuperarUnGuia($idguia);
        $idguia=$Guia['idguia'];
        $fullnombre=$Guia['fullnombre'];
        $genero=$Guia['genero'];
        $telefono=$Guia['telefono'];
        $email=$Guia['email'];
        $idiomas=$Guia['idiomas'];
        $descripcion=$Guia['descripcion'];
        $target="../View/Guia/VerGuia.php?idguia=".$idguia."&fullnombre=".$fullnombre."&genero=".$genero."&telefono=".$telefono."&email=".$email."&idiomas=".$idiomas."&descripcion=".$descripcion;
        break;
     case 'Recuperar':
        $idguia=$_REQUEST['idguia'];
        $Guia=$model->recuperarUnGuia($idguia);
        $idguia=$Guia['idguia'];
        $fullnombre=$Guia['fullnombre'];
        $genero=$Guia['genero'];
        $telefono=$Guia['telefono'];
        $email=$Guia['email'];
        $idiomas=$Guia['idiomas'];
        $descripcion=$Guia['descripcion'];
        $target="../View/Guia/EditarGuia.php?idguia=".$idguia."&fullnombre=".$fullnombre."&genero=".$genero."&telefono=".$telefono."&email=".$email."&idiomas=".$idiomas."&descripcion=".$descripcion;
        break;
    case 'Eliminar':
        $idguia=$_REQUEST['idguia'];
        $model-> Eliminar($idguia);
        $target="GuiaController.php?Op=Listar";
        break;
    case 'Editar':    
        $model->setidguia($_REQUEST['idguia']);
        $model->setfullnombre($_REQUEST["fullnombre"]);
        $model->setgenero($_REQUEST["genero"]);
        $model->settelefono($_REQUEST["telefono"]);
        $model->setemail($_REQUEST["email"]);
        $model->setidiomas($_REQUEST["idiomas"]);
        $model->setdescricion($_REQUEST["descripcion"]);
        $model->Editar();
        $target="GuiaController.php?Op=Listar";
        break;
    default :
        Session::setSesion("Mensaje Err","Operacion No valida");
        $target="../View/Guia/Guia.php";
        break;
    }
} catch (Exception $e) {
    Session::setSesion("mensajeErr",$e->getMessage());
}
header ("location:$target");
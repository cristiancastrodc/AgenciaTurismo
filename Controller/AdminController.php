<?php
require_once '../Model/AdminModel.php';
//recuperamos la operacion
$Op = $_REQUEST["Op"];
$model = new AdminModel();

switch ($Op){
    case 'Listar':
        $Datos = $model->Listar();
        $Lista = json_encode($Datos);//convertimos la consulta a JSON
        $url="../View/Admin/Admin.php?Lista=".$Lista;
        break;
    
    case 'Guardar':
        $model->setidadmin($_REQUEST["idadmin"]);
        $model->setusuario($_REQUEST["usuario"]);
        $model->setcontraseña($_REQUEST["contraseña"]);
        $model->sethabilitado($_REQUEST["habilitado"]);
        $model->setnombre($_REQUEST["nombre"]);
        $model->setapellidos($_REQUEST["apellidos"]);
        $model->setcargo($_REQUEST["cargo"]);
        $model->insertar();
        $url="AdminController.php?Op=Listar";
        break;
    
    case 'Eliminar':
        $idadmin=$_REQUEST['idadmin'];
        $model-> Eliminar($idadmin);
        $url="AdminController.php?Op=Listar";
        break;
        
    case 'Recuperar':
        $idadmin=$_REQUEST['idadmin'];
        $Datos = $model->Recuperar($idadmin);
        //convertimos la consulta a JSON
        $Lista = json_encode($Datos);
        $url="../View/Admin/EditarAdmin.php?Lista=".$Lista;    
        break;
        
    case 'Editar':    
        $idadmin= $_REQUEST['idadmin'];
        $model->setusuario($_REQUEST["usuario"]);
        $model->setcontraseña($_REQUEST["contraseña"]);
        $model->sethabilitado($_REQUEST["habilitado"]);
        $model->setnombre($_REQUEST["nombre"]);
        $model->setapellidos($_REQUEST["apellidos"]);
        $model->setcargo($_REQUEST["cargo"]);
        $model->Editar($idadmin);
        $url="AdminController.php?Op=Listar";
        break;
}
?>
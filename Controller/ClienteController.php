<?php
session_start();
require_once '../Model/ClienteModel.php';
require_once '../util/Sesion.php';
try {
    $Op = $_REQUEST["Op"];
    $model = new ClienteModel();

    switch ($Op){
        case 'Listar':
            $Lista = $model->Listar();
            Session::setSesion("lista", $Lista);
            $target="../View/Cliente/Cliente.php";
            break;
        case 'Guardar':
            $model->setidcliente($_REQUEST["idcliente"]);
            $model->setnombres($_REQUEST["nombres"]);
            $model->setapellidos($_REQUEST["apellidos"]);
            $model->setgenero($_REQUEST["genero"]);
            $model->settelefono($_REQUEST["telefono"]);
            $model->setemail($_REQUEST["email"]);
            $model->setpais($_REQUEST["pais"]);
            $model->setnropasaporte($_REQUEST["nropasaporte"]);
            $model->setfechanacimiento($_REQUEST["fechanacimiento"]);
            $model->setestudiante($_REQUEST["estudiante"]);
            $model->Insertar();
            $target="ClienteController.php?Op=Listar";
            break;
        case 'Ver':
            $idcliente =$_REQUEST['idcliente'];
            $Cliente =  $model->recuperarUnEquipo($idcliente);
            $idcliente=$Cliente['idcliente'];
            $nombres=$Cliente['nombres'];
            $apellidos=$Cliente['apellidos'];
            $genero=$Cliente['genero'];
            $telefono=$Cliente['telefono'];
            $email=$Cliente['email'];
            $pais=$Cliente['pais'];
            $nropasaporte=$Cliente['nropasaporte'];
            $fechanacimiento=$Cliente['fechanacimiento'];
            $estudiante=$Cliente['estudiante'];
            $target="../View/Cliente/VerCliente.php?idcliente=".$idcliente."&nombres=".$nombres."&apellidos=".$apellidos."&genero=".$genero."&telefono=".$telefono."&email=".$email."&pais=".$pais."&nropasaporte=".$nropasaporte."&fechanacimiento=".$fechanacimiento."&estudiante=".$estudiante;           
            break;
        case 'Recuperar':
            $idcliente=$_REQUEST['idcliente'];
            $Cliente =  $model->recuperarUnEquipo($idcliente);
            $idcliente=$Cliente['idcliente'];
            $nombres=$Cliente['nombres'];
            $apellidos=$Cliente['apellidos'];
            $genero=$Cliente['genero'];
            $telefono=$Cliente['telefono'];
            $email=$Cliente['email'];
            $pais=$Cliente['pais'];
            $nropasaporte=$Cliente['nropasaporte'];
            $fechanacimiento=$Cliente['fechanacimiento'];
            $estudiante=$Cliente['estudiante'];
            $target="../View/Cliente/EditarCliente.php?idcliente=".$idcliente."&nombres=".$nombres."&apellidos=".$apellidos."&genero=".$genero."&telefono=".$telefono."&email=".$email."&pais=".$pais."&nropasaporte=".$nropasaporte."&fechanacimiento=".$fechanacimiento."&estudiante=".$estudiante;
            break;
        case 'Editar':    
            $model->setidcliente($_REQUEST['idcliente']);
            $model->setnombres($_REQUEST["nombres"]);
            $model->setapellidos($_REQUEST["apellidos"]);
            $model->setgenero($_REQUEST["genero"]);
            $model->settelefono($_REQUEST["telefono"]);
            $model->setemail($_REQUEST["email"]);
            $model->setpais($_REQUEST["pais"]);
            $model->setnropasaporte($_REQUEST["nropasaporte"]);
            $model->setfechanacimiento($_REQUEST["fechanacimiento"]);
            $model->setestudiante($_REQUEST["estudiante"]);
            $model->Editar();
            $target="../../View/Cliente/Cliente.php";
            break;
        case 'Eliminar':
            $idcliente=$_REQUEST['idcliente'];
            $model-> Eliminar($idcliente);
            $target="ClienteController.php?Op=Listar";
            break;
        default :
            Session::setSesion("Mensaje Err", "Operacion no valiada");
            $target="../View/Cliente/Cliente.php";
            break;
    }    
} catch (Exception $e) {
    Session::setSesion("mensajeErr", $e->getMessage());
}
header ("location:$target");
?>
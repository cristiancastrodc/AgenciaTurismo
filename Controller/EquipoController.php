<?php
session_start();
require_once '../Model/EquipoModel.php';
require_once '../util/Sesion.php';
try {
    $Op = $_REQUEST["Op"];
    $model = new EquipoModel();
    switch ($Op){
    case 'Listar':
        $Lista = $model->Listar();
        Session::setSesion("lista", $Lista);
        $target="../View/Equipo/Equipo.php";
        break;
    case 'Guardar':
        $model->setidequipo($_REQUEST["idequipo"]);
        $model->setnombre($_REQUEST["nombre"]);
        $model->setprecio($_REQUEST["precio"]);
        $model->setcantidad($_REQUEST["cantidad"]);
        $model->insertar();
        $target="EquipoController.php?Op=Listar";
        break;
    case 'Ver':
        $idequipo=$_REQUEST['idequipo'];
        $Equipo = $model->recuperarUnEquipo($idequipo);
        $idequipo=$Equipo['idequipo'];
        $nombre=$Equipo['nombre'];
        $cantidad=$Equipo['cantidad'];
        $precio=$Equipo['precio'];
        $target="../View/Equipo/VerEquipo.php?idequipo=".$idequipo."&nombre=".$nombre."&cantidad=".$cantidad."&precio=".$precio;
        break;
    case 'Recuperar':
        $idequipo=$_REQUEST["idequipo"];
        $Equipo=$model->recuperarUnEquipo($idequipo);
        $idequipo=$Equipo['idequipo'];
        $nombre=$Equipo['nombre'];
        $cantidad=$Equipo['cantidad'];
        $precio=$Equipo['precio'];
        $target="../View/Equipo/EditarEquipo.php?idequipo=".$idequipo."&nombre=".$nombre."&cantidad=".$cantidad."&precio=".$precio;
        break;
    case 'Editar';
        $model->setidequipo($_REQUEST["idequipo"]);
        $model->setnombre($_REQUEST["nombre"]);
        $model->setprecio($_REQUEST["precio"]);
        $model->setcantidad($_REQUEST["cantidad"]);
        $model->Editar();
        $target="../View/Equipo/Equipo.php";        
        break;
    case 'Eliminar':
        $idequipo=$_REQUEST['idequipo'];
        $model-> Eliminar($idequipo);
        $target="EquipoController.php?Op=Listar";
        break;
    
    default :
    Session::setSesion("Mensaje Err", "Operacion no valiada");
        $target="../View/Equipo/Equipo.php";
        break;
    }
} catch (Exception $e) {
    Session::setSesion("mensajeErr", $e->getMessage());
}
header("Location:$target");
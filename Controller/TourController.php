<?php
session_start();
require_once '../Model/TourModel.php';
require_once '../Model/PaqueteModel.php';
require_once '../util/Sesion.php';

try {
  $Op = $_REQUEST["Op"];
  $model = new TourModel();

  switch ($Op){
    case 'Listar':
      $Lista = $model->Listar();
      Session::setSesion("lista", $Lista);
      $target="../View/Tour/Tour.php";
      break;
    case 'ListarPortada':
      // Recuperar y enviar los paquetes
      $model_paquete = new PaqueteModel();
      $lista_paquetes = $model_paquete->Listar();
      Session::setSesion("lista_paquetes", $lista_paquetes);
      // Recuperar y enviar los tours
      $Lista = $model->Listar();
      Session::setSesion("lista", $Lista);
      // Destino
      $target = "../View/Pagina/Portada.php";
      break;
    case 'ListarNuevo':
      $Lista = $model->Listar();
      Session::setSesion("lista", $Lista);
      $target="../View/Tour/nuevoTour.php";
      break;
    case 'Guardar':
      $model->setidtour($_REQUEST["idtour"]);
      $model->setidpaquete($_REQUEST["idpaquete"]);
      $model->setidguia($_REQUEST["idguia"]);
      $model->setnombretour($_REQUEST["nombretour"]);
      $model->setprecio($_REQUEST["precio"]);
      $model->setinfogeneral($_REQUEST["infogeneral"]);
      $model->setiterinario($_REQUEST["iterinario"]);
      $model->setincluye($_REQUEST["incluye"]);
      $model->setquellevar($_REQUEST["quellevar"]);
      $model->setfoto($_REQUEST["foto"]);
      $model->insertar();
      $url="TourController.php?Op=Listar";
      break;
    case 'Ver':
      $idtour=$_REQUEST['idtour'];
      $Tour=$model->recuperarUnTour($idtour);
      $idtour=$Tour['idtour'];
      $idpaquete=$Tour['idpaquete'];
      $idguia= $Tour['idguia'];
      $nombretour = $Tour['nombretour'];
      $precio = $Tour['precio'];
      $infogeneral = $Tour['infogeneral'];
      $iterinario = $Tour['iterinario'];
      $incluye = $Tour['incluye'];
      $quellevar = $Tour['quellevar'];
      $foto = $Tour['foto'];
      $target="../View/Tour/VerTour.php?idtour=".$idtour."&idpaquete=".$idpaquete."&idguia=".$idguia."&nombretour=".$nombretour."&precio=".$precio."&infogeneral=".$infogeneral."&iterinario=".$iterinario."&incluye=".$incluye."&quellevar=".$quellevar."&foto=".$foto;
      break;
    case 'Recuperar':
      $idtour=$_REQUEST['idtour'];
      $Tour=$model->recuperarUnTour($idtour);
      $idtour=$Tour['idtour'];
      $idpaquete=$Tour['idpaquete'];
      $idguia= $Tour['idguia'];
      $nombretour = $Tour['nombretour'];
      $precio = $Tour['precio'];
      $infogeneral = $Tour['infogeneral'];
      $iterinario = $Tour['iterinario'];
      $incluye = $Tour['incluye'];
      $quellevar = $Tour['quellevar'];
      $foto = $Tour['foto'];
      $target="../View/Tour/EditarTour.php?idtour=".$idtour."&idpaquete=".$idpaquete."&idguia=".$idguia."&nombretour=".$nombretour."&precio=".$precio."&infogeneral=".$infogeneral."&iterinario=".$iterinario."&incluye=".$incluye."&quellevar=".$quellevar."&foto=".$foto;
      break;
    case 'Eliminar':
      $idtour=$_REQUEST['idtour'];
      $model-> Eliminar($idtour);
      $url="TourController.php?Op=Listar";
      break;
    case 'Editar':
      $model->seidtour($_REQUEST["idtour"]);
      $model->setidpaquete($_REQUEST["idpaquete"]);
      $model->setidguia($_REQUEST["idguia"]);
      $model->setnombretour($_REQUEST["nombretour"]);
      $model->setprecio($_REQUEST["precio"]);
      $model->setinfogeneral($_REQUEST["infogeneral"]);
      $model->setiterinario($_REQUEST["iterinario"]);
      $model->setincluye($_REQUEST["incluye"]);
      $model->setquellevar($_REQUEST["quellevar"]);
      $model->setfoto($_REQUEST["foto"]);
      $model->Editar();
      $target="../View/Tour/Tour.php";
      break;
    default :
      Session::setSesion("Mensaje Err", "Operacion no valida");
      $target="../View/Tour/Tour.php";
      break;
  }
} catch (Exception $e) {
  Session::setSesion("mensajeErr", $e->getMessage());
}
header ("location:$target");
?>
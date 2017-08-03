<?php
session_start();
include_once __DIR__ . '/../Model/ClienteModel.php';
include_once __DIR__ . '/../Model/ReservarModel.php';
include_once __DIR__ . '/../Model/ReservaDetalleModel.php';
include_once __DIR__ . '/../Model/EquipoReservaModel.php';
include_once __DIR__ . '/../Model/PagoModel.php';
require_once __DIR__ . '/../util/Sesion.php';

try {
  $Op = $_REQUEST["Op"];
  switch ($Op) {
    case 'Guardar':
      // Recuperar e insertar clientes
      $clientes = $_REQUEST['clientes'];
      $ids_clientes = fn_GuardarClientes($clientes);
      // Recuperar y almacenar reserva
      $idtour = $_REQUEST['idtour'];
      $preciotour = $_REQUEST['preciotour'];
      $fechaviaje = $_REQUEST['fechaviaje'];
      $equipos = $_REQUEST['equipos'];
      fn_GuardarReserva($idtour, $preciotour, $fechaviaje, $ids_clientes, $equipos);
      Session::setSesion("mensajeReserva", 'Se guardó la reserva correctamente.');
      $target = "../View/Pagina/PaginaReservar.php?idtour=$idtour";
      break;
    default:
      Session::setSesion("mensajeErr", "Operación no válida.");
      $target = "../View/Pagina/Portada.php";
      break;
  }
} catch (Exception $e) {
  $target = "../View/Pagina/Portada.php";
  Session::setSesion("mensajeErr", $e->getMessage());
}
header ("location:$target");

// Función para guardar los clientes
function fn_GuardarClientes($clientes) {
  // Recuperar el último idcliente para obtener el siguiente
  $idcliente = '';
  $model = new ClienteModel();
  $Lista = $model->Listar();
  $cantidad = count($Lista);
  if ($cantidad > 0) {
    // substr quita el caracter C delantero, intval convierte el string a entero para finalmente añadir una unidad
    $sgte = intval(substr($Lista[$cantidad - 1]['idcliente'], 1)) + 1;
    // Formatear para obtener el siguiente código
    $idcliente = "C" . str_pad($sgte, 4, "0", STR_PAD_LEFT);
  } else {
    $idcliente = "C0001";
  }
  // Generar array que guarda los ids de los clientes insertados
  $ids_clientes = array();
  // Guardar cada cliente
  foreach ($clientes as $cliente) {
    // Insertar el cliente
    $model = new ClienteModel();
    $model->setidcliente($idcliente);
    $model->setnombres($cliente['nombres']);
    $model->setapellidos($cliente['apellidos']);
    $model->setgenero($cliente['genero']);
    $model->settelefono($cliente['telefono']);
    $model->setemail($cliente['email']);
    $model->setpais($cliente['pais']);
    $model->setnropasaporte($cliente['nropasaporte']);
    $model->setfechanacimiento($cliente['fechanacimiento']);
    $model->setestudiante($cliente['estudiante']);
    $model->Insertar();
    // Almacenar el id para devolver dentro del array
    array_push($ids_clientes, $idcliente);
    // Actualizar idcliente
    $sgte = intval(substr($idcliente, 1)) + 1;
    // Formatear para obtener el siguiente código
    $idcliente = "C" . str_pad($sgte, 4, "0", STR_PAD_LEFT);
  }
  // Devolver los ids de los clientes creados
  return $ids_clientes;
}
// Función para guardar la reserva
function fn_GuardarReserva($idtour, $preciotour, $fechaviaje, $ids_clientes, $equipos) {
  // Guardar la reserva
  $modelreserva = new ReservaModel();
  $idreserva = '';
  // Recuperar el número de reserva correspondiente
  $lista_reservas = $modelreserva->Listar();
  $cantidad = count($lista_reservas);
  if ($cantidad > 0) {
    // substr quita el caracter R delantero, intval convierte el string a entero para finalmente añadir una unidad
    $sgte = intval(substr($lista_reservas[$cantidad - 1]['idreserva'], 1)) + 1;
    // Formatear para obtener el siguiente código
    $idreserva = "R" . str_pad($sgte, 4, "0", STR_PAD_LEFT);
  } else {
    $idreserva = "R0001";
  }
  // Asignar datos a la reserva
  $modelreserva->setidreserva($idreserva);
  $modelreserva->setidtour($idtour);
  $modelreserva->setfechaviaje($fechaviaje);
  $modelreserva->Insertar();
  // Guardar el detalle de la reserva
  $modeldetallereserva = new ReservaDetalleModel();
  $totaltour = 0;
  foreach ($ids_clientes as $idcliente) {
    $modeldetallereserva->setidreserva($idreserva);
    $modeldetallereserva->setidcliente($idcliente);
    $modeldetallereserva->setprecio($preciotour);
    $modeldetallereserva->Insertar();
    // Aumentar el monto total
    $totaltour += floatval($preciotour);
  }
  // Guardar los equipos de la reserva
  $modelequiporeserva = new EquipoReservaModel();
  $totalequipos = 0;
  foreach ($equipos as $equipo) {
    $modelequiporeserva->setidreserva($idreserva);
    $modelequiporeserva->setidequipo($equipo['idequipo']);
    $modelequiporeserva->setprecio($equipo['precio']);
    $modelequiporeserva->setcantidad($equipo['cantidad']);
    $modelequiporeserva->settotal($equipo['total']);
    $modelequiporeserva->Insertar();
    // Aumentar el monto total
    $totalequipos += floatval($equipo['total']);
  }
  // Guardar el Pago
  $modelpago = new PagoModel();
  $idpago = '';
  // Recuperar el número de reserva correspondiente
  $lista_pagos = $modelpago->Listar();
  $cantidad = count($lista_pagos);
  if ($cantidad > 0) {
    // substr quita el caracter C delantero, intval convierte el string a entero para finalmente añadir una unidad
    $sgte = intval(substr($lista_pagos[$cantidad - 1]['idpago'], 1)) + 1;
    // Formatear para obtener el siguiente código
    $idpago = "P" . str_pad($sgte, 4, "0", STR_PAD_LEFT);
  } else {
    $idpago = "P0001";
  }
  // Asignar datos e insertar
  $modelpago->setidpago($idpago);
  $modelpago->setidreserva($idreserva);
  $total = $totaltour + $totalequipos;
  $modelpago->setmontototal($total);
  $modelpago->Insertar();
}

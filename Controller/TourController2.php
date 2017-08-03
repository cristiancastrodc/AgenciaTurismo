<?php
include_once __DIR__ . '/../Model/TourModel.php';

function fn_RecuperarTour($idtour){
  $model = new TourModel();
  $Datos = $model->recuperarUnTour($idtour);
  return $Datos;
}

<?php
include_once dirname(__FILE__) . '/../Model/TourModel.php';

function fn_RecuperarTour($idtour){
  $model = new TourModel();
  $Datos = $model->recuperarUnTour($idtour);
  return $Datos;
}

<?php
include_once __DIR__ . '/../Model/EquipoModel.php';

function fn_Listar(){
  $model = new EquipoModel();
  $Datos = $model->Listar();
  return $Datos;
}

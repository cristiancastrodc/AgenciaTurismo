<?php
include_once 'C:/xampp/htdocs/HappyGringoSistema4/Model/EquipoModel.php';
 
function fn_Listar(){    
    $model = new EquipoModel();
    $Datos = $model->Listar();
    return $Datos;
}


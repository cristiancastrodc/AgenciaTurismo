<?php
include_once 'C:/xampp/htdocs/HappyGringoSistema4/Model/TourModel.php';
 
function fn_Recuperar($idtour){    
    $model = new TourModel();
    $Datos = $model->Recuperar($idtour);
    return $Datos;
}


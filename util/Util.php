<?php

class Util{
    //Archivo de Log de errores
    const LOG_FILE = "C:/xampp/htdocs/HappyGringoSistema4/log/hist.log";
    
    //Graba los datos de una excepcion en en log de errores
    public function save_log(Exception $e, $query =""){
       $mensaje="File: ".$e->getFile()."\n".
                "Line: ".$e->getLine()."\n".
                "Code: ".$e->getCode()."\n".
                "Message: ".$e->getMessage()."\n".
                "Query: ".query()."\n\n";
        error_log($mensaje, 3,"../log/hist.log");
    }
}

/*
 * VER TIPO DE ERRORES EN LA GUIAEN  EL CASO DE 3
 * 3 message es añadido al inicio del archivo destino. No se añade 
 * automáticamente una nueva línea al final de la cadena message.
 */
?>


<?php

class Session{
    /*****************EXISTE LA SESION**********************/
    //Verificamos si existe una sesion
    public static function existeSesion($name) {
        $rpta = FALSE;
        if (isset($_SESSION[$name])) {
            $rpta = TRUE;
        }
        return $rpta;
    }
    //verificar si NO existe una sesion
    public static function NoExisteSesion($name){
        $rpta = TRUE;
        if (isset($_SESSION[$name])) {
            $rpta = FALSE;
        }
        return $rpta;
    }

    /*****************GET SET*************************/
    //retorna el valor de un atributo de sesion
    public static function getSesion($name){
        $value = null;
        if (self::existeSesion($name)) {$value = $_SESSION[$name];}
        return $value;
    }
    //guarda un atributo en session
    public static function setSesion($name,$value){$_SESSION[$name] = $value;}

    /*****************ELIMINAR SESION**********************/
    //elimina un atributo de sesion
    public static function removeSesion($name){
        unset($_SESSION[$name]);
    }
    //Recupera el valor de un atributo de sesion y lo elimina
    public static function eliminarSesion($name){
        $value=null;
        if (self::existeSesion($name)) {
            $value =$_SESSION[$name];
            self::removeSesion($name);
        }
        return $value;
    }
}
//http://php.net/manual/es/function.isset.php
?>


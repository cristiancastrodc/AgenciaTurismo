<?php
class ConexionBD{
    //atributos
    private $server;
    private $usuario;
    private $password;
    private $bd;
    private $conexion;
    //Constructor
    public function __construct() {
        $this->server="localhost";
        $this->usuario="root";
        $this->password="admin";
        $this->bd="dbagenciaturismo";
    }
    //Conectar a la BD
    public function conectarBD(){
        $this->conexion =mysqli_connect($this->server,$this->usuario,  $this->password,  $this->bd);
        if($this->conexion){
            return $this->conexion;
        }
        else{
            return NULL;
        }
    }
        //ejecutar consulta
    public function ejecutarQuery($query){
        $dbc = $this->conectarBD();
        //Ejecutamos la consulta y guardamos el resultado
        $result = mysqli_query($dbc, $query);
        $lista = array();//declaramos el arreglo
        //Almacenamos cada fila de la consulta en el arreglo
        while ($row = mysqli_fetch_assoc($result)){
            $lista[] = $row;
        }
        mysqli_free_result($result);
        return $lista;
    }
    //ejecutar consulta2 para insertar, eliminar,actualizar
   public function ejecutarQuery2($query){
        $dbc2 = $this->conectarBD();
        //Ejecutamos la consulta y guardamos el resultado
        $respuesta = mysqli_query($dbc2, $query);
        return $respuesta;
    }
}
/*
$basedatos = new ConexionBD();
$resulta = $basedatos->ejecutarQuery("select * from tpaquetes where idpaquete='00001';");
$dato=$resulta[0];
print_r($dato[0]);
*/
//print_r($resulta[0]);

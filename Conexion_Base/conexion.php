<?php

class Conexion{
    private $conexion;
    private $host = "localhost";
    private $db ="wilson_1102";
    private $usuario ="wilson_1102";
    private $contraseña = "1102717";
    public function __construct()
    {
        try{
            $opciones =[
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE =>PDO::FETCH_ASSOC
            ];
            $this->conexion = "mysql:host='localhost';dbname='wilson_1102',
        charset=utf8mb4";
        $this->conexion = new PDO($this->conexion,'wilson_1102','1102717',$opciones);
        $this->conexion->exec("SET CHARACTERC SET utf8"); 
        }catch (Exception $e){
            echo $e->getMessage();
        }
    }
    function getConexion(){
        return $this->conexion;
    }
    function cerrarConexion(){
        $this->conexion = null;
    }
}
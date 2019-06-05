<?php

class Conexion
{

    public function __construct() {
    }

    public function __destruct()
    {
    }
    
    public function Conectar()
    {
        // Create connection
        $conexion = new mysqli("localhost", "root", "", "redcate");
        // Check connection
        if ($conexion->connect_error) {
            die("Conexion fallida: " . $conexion->connect_error);
        }
        return $conexion;
    }
    
     
    public function Desconectar()
    {
        $conexion = $this->Conectar();
        $conexion->close();
    } 
}
?>
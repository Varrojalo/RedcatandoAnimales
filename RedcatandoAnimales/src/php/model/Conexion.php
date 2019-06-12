<?php

class Conexion
{

    public function __construct() {
    }

    public function __destruct()
    {
    }
    /** 
     * Conexión a base de datos
     * 
     * Se conecta a la base datos con el nombre redcate,
     * creando una conexión a esta, luego confirma si la hay,
     * retorna una objeto tipo Conexion. 
     */
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
    
     /**
      * Desconecta de la base de datos
      *
      * Comprueba la conexión y desconecta si esta activa la conexión.
      */
    public function Desconectar()
    {
        $conexion = $this->Conectar();
        $conexion->close();
    } 
}
?>
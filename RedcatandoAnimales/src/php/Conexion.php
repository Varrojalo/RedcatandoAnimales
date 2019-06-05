<?php
define('SERVIDOR', 'localhost');
define('USUARIO', 'root');
define('CONTRASENA', '');
define('NOMBRE_DB', 'redcate');
class Conexion
{
    const SERVIDOR = "localhost";
    const USUARIO = "root";
    const CONTRASENA = "";
    const NOMBRE_DB = "redcate";
    

    public function __construct() {
    }

    public function __destruct()
    {
        print "Archivo destruido";
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
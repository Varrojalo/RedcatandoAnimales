<?php
$servidor = "localhost";
$usuario = "root";
$contraseña = "";
$db = "redcate";
$conexion = NULL;


public function Conectar()
{
    // Create connection
    $conexion = new mysqli($servidor, $usuario, $contraseña, $db);
    // Check connection
    if ($conexion->connect_error) {
        die("Conexion fallida: " . $conexion->connect_error);
    }
    return $conexion;
}

 
public function Desconectar()
{
    $conexion->close();
}

?>
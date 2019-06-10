<?php
include 'Conexion.php';
include 'model/dto/Socio.php';

function buscarSocio($codigo){
    // Crea conexion
    $con = new Conexion();
    $conn = $con->Conectar();
    $sql = "SELECT * FROM socio WHERE cod = ".$codigo;
    $result = $conn->query($sql);

    $socio = new Socio($result[0]["cod"], $result[0]["codOrganizacion"], $result[0]["contracena"], $result[0]["nombre"], $result[0]["apellidoPaterno"], $result[0]["cargo"] );

    return $socio;

    $con->Desconectar();
}
?>
<?php
include 'Conexion.php';
include 'model/dto/Direccion.php';

function buscarDireccion(){
    // Crea conexion
    $con = new Conexion();
    $conn = $con->Conectar();
    $sql = $conn->prepare("SELECT * FROM direccion");
    $result = $conn->query($sql);

    $tabla = array();

    if ($result->num_rows > 0) {
        // almacena resultado en arreglo
        while($fila = $result->fetch_assoc()) {
            $tabla[] = new Direccion($fila["cod"], $fila["codDuenio"], $fila["numero"],
            $fila["calle"], $fila["descripcion"]);
        }
        return $tabla;
    } else {
        echo "0 results";
        return null;
    }
    $con->Desconectar();
}

function agregarCampaña($campaña)
{
    $con = new Conexion();
    $conn = $con->Conectar();
    $sql = $conn->prepare("INSERT INTO direccion (cod, codDuenio, numero, calle, descripcion)
    VALUES (?,?,?,?,?)");
    $sql = $conn->bind_param($campaña->getCodigo(), $campaña->getDuenio(), $campaña->getNumero(), $campaña->getCalle(), $campaña->getDescripcion(), $campaña->getTipo());
    $result = $conn->query($sql);
}

function eliminarCampaña($codigo)
{
    $con = new Conexion();
    $conn = $con->Conectar();
    $sql = $conn->prepare("DELETE * FROM direccion WHERE cod = ?");
    $sql->bind_param($codigo)
    $result = $conn->query($sql);

    $con->Desconectar();
}

?>
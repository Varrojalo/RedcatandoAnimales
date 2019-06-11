<?php
include 'Conexion.php';
include 'model/dto/Campaña.php';

function buscarCampañas(){
    // Crea conexion
    $con = new Conexion();
    $conn = $con->Conectar();
    $sql = $conn->prepare("SELECT * FROM campana");
    $result = $conn->query($sql);

    $tabla = array();

    if ($result->num_rows > 0) {
        // almacena resultado en arreglo
        while($fila = $result->fetch_assoc()) {
            $tabla[] = new Campaña($fila["cod"], $fila["codOrganizacion"], $fila["fechaInicio"],
            $fila["fechaTermino"], $fila["descripcion"], $fila["tipo"]);
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
    $sql = $conn->prepare("INSERT INTO campana (cod, codOrganizacion, fechaInicio, fechaTermino, descripcion, tipo)
    VALUES (?,?,?,?,?,?)");
    $sql = $conn->bind_param($campaña->getCodigo(), $campaña->getCodigoOrganizacion(), $campaña->getFechaInicio(), $campaña->getFechaTermino(), $campaña->getDescripcion(), $campaña->getTipo());
    $result = $conn->query($sql);
}

function eliminarCampaña($codigo)
{
    $con = new Conexion();
    $conn = $con->Conectar();
    $sql = $conn->prepare("DELETE * FROM campana WHERE cod = ?");
    $sql->bind_param($codigo)
    $result = $conn->query($sql);

    $con->Desconectar();
}

?>